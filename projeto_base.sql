<?php

if ($this->login_user->user_type === "staff") {

    //prepare ticket label filter list
    $view_data['ticket_labels_dropdown'] = json_encode($this->make_labels_dropdown("ticket", "", true));

    //prepare assign to filter list
    $assigned_to_dropdown = array(array("id" => "", "text" => "- " . app_lang("assigned_to") . " -"));

    $assigned_to_list = $this->Users_model->get_dropdown_list(array("first_name", "last_name"), "id", array("deleted" => 0, "user_type" => "staff"));
    foreach ($assigned_to_list as $key => $value) {
        $assigned_to_dropdown[] = array("id" => $key, "text" => $value);
    }

    $view_data['show_options_column'] = true; //team members can view the options column

    $view_data['assigned_to_dropdown'] = json_encode($assigned_to_dropdown);

    $view_data['ticket_types_dropdown'] = json_encode($this->_get_ticket_types_dropdown_list_for_filter());

    return $this->template->rander("tickets/tickets_list", $view_data);
} else {

    if($this->login_user->client_id == 401){

        $view_data['client_id'] = $this->login_user->client_id;
        $view_data['page_type'] = "full";

    }else{
        switch ($this->login_user->client_id){ 
        case 402:
            $view_data['client_id'] = $this->login_user->client_id;
            $view_data['page_type'] = "full";
            break;
        case 403:
            $view_data['client_id'] = $this->login_user->client_id;
            $view_data['page_type'] = "full";
            break;
        case 404:
            $view_data['client_id'] = $this->login_user->client_id;
            $view_data['page_type'] = "full";
            break;

        }
            $view_data['client_id'] = $this->login_user->client_id;
            $view_data['page_type'] = "full";
            return $this->template->rander("clients/tickets/index", $view_data);
       
    }

    return $this->template->rander("clients/tickets/index", $view_data);
}

<?php
$servername = "localhost"; // Host do banco de dados
$username = "seu_usuario"; // Nome de usuário do banco de dados
$password = "sua_senha"; // Senha do banco de dados
$database = "seu_banco_de_dados"; // Nome do banco de dados

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Faz a consulta SELECT
$query = "SELECT * FROM rise_tickets" WHERE client_id = $user_id;
$result = $conn->query($query);

// Verifica se a consulta foi executada com sucesso
if ($result) {
    // Processa os resultados da consulta
    while ($row = $result->fetch_assoc()) {
        // Faça algo com os dados, por exemplo:
        echo "ID: " . $row["id"] . " Nome: " . $row["nome"] . "<br>";
    }

    // Libera os recursos
    $result->close();
} else {
    echo "Erro na consulta: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>


//Verificar session
print_r($this->session->set_userdata);
exit;
print_r($this->load->library);
exit;