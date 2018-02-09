<div class="pc">
    <div class="formSign col-xs-8 row col-xs-push-2">
        <h1>Film</h1>

        <?php
        if(isset($_POST['formulaire'])){
            if(!empty($tabErreur)){
                $alert = '<div class ="alert alert-danger "><h3>Vous n\'avez pas rempli le formulaire correctement !</h3><ul>';
                foreach ($tabErreur as $key => $value) {
                    // $arr[3] sera mis à jour avec chaque valeur de $arr...
                    $alert .= "<li style='display:block;text-align: left'> {$value}</li>";
                }
                $alert .= '</ul> </div>';
                echo $alert;
            }
        }

        ?>
        <div class="col-xs-12">
            <form action="#" method="post">
                <div class="form-group">
                    <input class = "form-control" type="text" name="title" id ="title" placeholder=" Titre du film ">
                </div>
                <div class="form-group">
                    <input class = "form-control" type="text" name="actors" id ="actors" placeholder=" Acteurs ">
                </div>
                <div class="form-group">
                    <select class = "form-control" type="text" name="year_of_prod" id ="year_of_prod" placeholder=" année ">
                        <option>2018
                        <option>2017
                        <option>2016
                        <option>2015
                        <option>2014

                </div>
                </br>
                <div class="form-group">
                    <input class = "form-control" type="text" name="director" id ="director" placeholder="réalisateur">
                </div>
                <div class="form-group">
                    <input class = "form-control" type="text" name="producer" id ="producer" placeholder=" producer">
                </div>
                <div class="form-group">
                    <select class = "form-control" type="text" name="language" id ="language" placeholder=" language ">
                        <option>français
                        <option>anglais


                </div>
                <div class="form-group">
                    <select class = "form-control" type="text" name="language" id ="language" placeholder=" language ">
                        <option>action
                        <option>horreur


                </div>


        </div>


    </div>
    <div class="form-group">
        <input class = "form-control" type="text" name="storyline" id ="storyline" placeholder=" synopsis">
    </div>

    <div class="form-group">
        <input type="submit" value="Envoyer" name="formulaire" class="btn btn-info btn-lg">
        <input type="reset" value="Effacer" class="btn btn-warning btn-lg">
    </div>
    </form>
</div>

</div>
</div>


