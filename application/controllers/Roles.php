<?php

/**
 * Sets the user role
 *
 * @author Teah Elascuk
 */
class Roles extends Application {
    public function user_role($role = ROLE_GUEST) {
        $this->session->set_userdata('userrole', $role);
        redirect($_SERVER['HTTP_REFERER']);    // go back
    }
}
