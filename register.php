<?php

$database_file = 'app/data/users.json';


if (!file_exists('data')) {
    mkdir('data', 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $terms = isset($_POST['terms']) ? true : false;

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        die("Por favor completa todos los campos.");
    }

 
    if ($password !== $confirm_password) {
        die("Las contraseñas no coinciden.");
    }

    if (!$terms) {
        die("Debes aceptar los Términos y Condiciones.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $user_data = [
        'username' => $username,
        'email' => $email,
        'password' => $hashed_password,
        'terms' => $terms,
        'date' => date('Y-m-d H:i:s')
    ];

    save_to_json($user_data, $database_file);
    echo "Registro exitoso. Tus datos han sido guardados.";
}


function save_to_json($data, $file) {
    if (!file_exists($file)) {
        $users = [$data];
    } else {
        $users = json_decode(file_get_contents($file), true);
        $users[] = $data;
    }
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}
?>
