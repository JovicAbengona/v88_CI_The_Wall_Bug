        <?php echo $this->session->flashdata('input_errors'); ?>
        <?php $this->session->set_flashdata('input_errors', ""); ?>

        <h1>Login</h1>
        
        <form action="signin/validate" method="POST">            
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
            Email address: <input type="text" name="email">
            Password: <input type="password" name="password">
        
            <input type="submit" value="Signin">
            <a href="register">Don't have an account? Register</a>
        </form>
    </body>
</html>
