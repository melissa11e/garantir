<?php
class Admin {
    private $codigoAdmin;
    private $emailAdmin;
    private $senhaAdmin;

    public function __construct($codigoAdmin, $emailAdmin, $senhaAdmin) {
        $this->codigoAdmin = $codigoAdmin;
        $this->emailAdmin = $emailAdmin;
        $this->senhaAdmin = $senhaAdmin;
    }

    public function getCodigoAdmin() {
        return $this->codigoAdmin;
    }
    public function setCodigoAdmin($codigoAdmin){
        $this->codigoAdmin=$codigoAdmin;
    }

    public function getEmailAdmin() {
        return $this->emailAdmin;
    }

    public function setEmailAdmin($emailAdmin){
        $this->emailAdmin=$emailAdmin;
    }

    public function getSenhaAdmin() {
        return $this->senhaAdmin;
    }
    public function setSenhaAdmin($senhaAdmin){
        $this->senhaAdmin=$senhaAdmin;
    }
}
?>
