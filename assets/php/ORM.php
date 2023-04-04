<?php

class ORM
{

    /**
     * Connecting to the database
     */
    public function __construct()
    {
        $this->pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.sqlite');
    }

    /**
     * Simple function to create a table
     */
    public function createUsersTable()
    {
        $this->pdo->query("CREATE TABLE IF NOT EXISTS users(
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    username VARCHAR(255) NOT NULL UNIQUE,
                    nom VARCHAR(255) NOT NULL,
                    prenom VARHCHAR(255) NOT NULL,
                    email    VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL
                );");
    }

    /**
     * Creating appointments table
     */
    public function createAppointmentsTable()
    {
        $this->pdo->query("CREATE TABLE IF NOT EXISTS appointments(
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    nom VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    service VARCHAR(255) NOT NULL,
                    date TEXT NOT NULL
        );");
    }

    public function createBlogsTable()
    {
        $this->pdo->query("CREATE TABLE IF NOT EXISTS blogs(
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    nom VARCHAR(255) NOT NULL,
                    title VARCHAR(255) NOT NULL,
                    content VARCHAR(255) NOT NULL,
                    categories VARCHAR(255) NOT NULL
        );");
    }

    /**
     * This function is checking and printing all appointments that a given param $email has.
     * While the statement does not return FALSE, we are checking every single row,
     * that matches the given email in the appointments table.
     * @param $email
     */
    public function getAppointments($email)
    {
        $statement = $this->pdo->prepare("SELECT * FROM appointments where email = '$email' ORDER BY date");
        $statement->execute();

        while ($check = $statement->fetch(PDO::FETCH_ASSOC)) {
            $valid_date = date("F j, Y", strtotime($check['date']));

            echo "<tr>";
            echo "<td id = 'table_nom'>" . $check['nom'] . "</td>";
            echo "<td id = 'table_date'>" . $valid_date . "</td>";
            echo "<td id = 'table_service'>" . $check['service'] . "</td>";
            echo "<td id = 'table_id'>" . $check['id'] . "</td>";
            echo "<td>
                        <div class = 'inserted'>
                         <form action = '/assets/php/appointment_handler.php' method = post class = 'edit-form'>
                            <div class = 'form-field'>
                                <input type = 'date' name = 'new_date' class='edit_date_class' value = 'Edit your date'>
                                <input type='hidden' name='id' value = " . $check['id'] . ">
                                <input type = 'submit' name = 'delete' value = 'Delete appointment'>  
                            </div>
                            <select name = 'new_service'>
                                <option value='homme'>Coupure homme</option>
                                <option value='femme'>Coupure femme</option>
                                <option value='enfant'>Coupure enfant</option>
                            </select> 
                            <input type = 'submit' name = 'edit' class = 'edit_button_class' value = 'Edit appointment'>                          
                        </form>
                        </div>
                  </td>";
            echo "</tr>";
        }
    }

    public function getBlogs()
    {
        return $this->pdo->query("SELECT * FROM blogs ORDER BY id DESC")->fetchAll();
    }

    /**
     * @param $id
     * @param $newdate
     * @param $newservice
     * @return false|PDOStatement
     *
     * Simple function that updates an appointment. The appointments are selected by a known ID
     */
    public function editAppointment($id, $newdate, $newservice)
    {
        return $this->pdo->query("UPDATE appointments SET date = '$newdate', service = '$newservice' WHERE id = $id");
    }


    /**
     * @param $id
     * @return false|PDOStatement
     *
     * Simple deleting function. The name speaks for itself
     */
    public function deleteAppointment($id)
    {
        return $this->pdo->query("DELETE FROM appointments WHERE id = $id");
    }

    /**
     * checkingExistingUser
     * @param $username
     * @return bool
     *
     * This function is checking if the user already exists in the database, in order to prevent multiple accounts with
     * the same name. The function is selecting the username row in order to check for similarities with user input.
     * If a similarity is found, the function returns true, which means that there is already a user with such username.
     * If not , the function returns false.
     */
    public function checkExistingUser($username): bool
    {
        // preparing SELECT statement for the execute, that gets the username row from the databases
        $statement = $this->pdo->prepare("SELECT username FROM users WHERE username = ?");
        // execute the statement. check if $username is in the row
        $statement->execute([$username]);
        // search through all the rows
        $username = $statement->fetch(PDO::FETCH_ASSOC);
        // if found similarities return true <=> user already exists, if not, return false
        if ($username) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * loginUser
     * @param $username
     * @param $password
     *
     * This function allows the user to log-in to his profile. It takes the username and password passed in the inputs
     */
    public function loginUser($username, $password)
    {
        $statement = $this->pdo->prepare("SELECT * FROM users where username = ?");
        $statement->execute([$username]);
        $check = $statement->fetch();

        $hashed_pass = $check['password'];

        $userExists = $this->checkExistingUser($username);


        if ($userExists !== true) {
            header("location: /login.php?error=user_does_not_exist");
            exit();
        }

        if (password_verify($password, $hashed_pass) === true) {
            session_start();
            $_SESSION['id'] = $check['id'];
            $_SESSION['nom'] = $check['nom'];
            $_SESSION['email'] = $check['email'];
            $_SESSION['username'] = $check['username'];
            header("location: /profile.php");
            exit();
        } else {
            header("location: /login.php?error=wrong_password");
            exit();
        }
    }


    /**
     * insertToTable
     * @param $username
     * @param $password
     *
     * This function inserts the given params in the users table.
     */
    public function insertToTable($username, $nom, $prenom, $email, $password)
    {

        $statement = $this->pdo->prepare("INSERT INTO users (username, nom, prenom, email, password) VALUES (:username, :nom, :prenom, :email, :password)");

        $statement->bindParam(':username', $username);
        $statement->bindParam(':nom', $nom);
        $statement->bindParam(':prenom', $prenom);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->execute(array(':username' => $username, ':nom' => $nom, ':prenom' => $prenom, ':email' => $email, ':password' => $password));
    }

    /**
     * @param $nom
     * @param $email
     * @param $service
     * @param $date
     *
     * This function inserts the given params in the appointments table.
     */
    public function insertToAppointmentsTable($nom, $email, $service, $date)
    {

        $statement = $this->pdo->prepare("INSERT INTO appointments (nom, email, service, date) VALUES (:nom, :email, :service, :date)");

        $statement->bindParam(':nom', $nom);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':service', $service);
        $statement->bindParam(':date', $date);
        $statement->execute(array(':nom' => $nom, ':email' => $email, ':service' => $service, ':date' => $date));
    }

    public function insertToBlogsTable($nom, $title, $content, $categorie)
    {
        $statement = $this->pdo->prepare("INSERT INTO blogs (nom, title, content, categories) VALUES (:nom, :title, :content, :categorie)");

        $statement->bindParam(':nom', $nom);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':content', $content);
        $statement->bindParam(':categorie', $categorie);
        $statement->execute(array(':nom' => $nom, ':title' => $title, ':content' => $content, ':categorie' => $categorie));
    }



}
