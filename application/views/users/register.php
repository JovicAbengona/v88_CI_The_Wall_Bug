        <?php echo $this->session->flashdata('input_errors'); ?>
        <?php $this->session->set_flashdata('input_errors', ""); ?>

        <h1>Register</h1>

        <form action="register/validate" method="POST">
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
            First name: <input type="text" name="first_name">
            Last name: <input type="text" name="last_name">
            Email address: <input type="text" name="email">
            Password: <input type="password" name="password">
            Confirm Password: <input type="password" name="confirm_password"><br>
            
            <input type="submit" value="Register">
            <a href="signin">Already have an account? Log in</a>
        </form>
    </body>
</html>