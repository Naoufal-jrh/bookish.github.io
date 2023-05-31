<div class=" scale-in-center modify   ">
    <style>
        img,
        .delete {
            display: inline;

        }

        .delete {
            text-align: center;
            font-size: 110%;
            color: white;
        }


        form.delete {
            width: 100% !important;
            margin-top: 30%;
        }
    </style>

    <div class="container-sm m-sm-2 w-25  ">
        <form class="delete" id="suppr_adherant" action="../back-end/suppr_adherant.php">
            <input type="text" name="id">

            <img src="../CSS/warning-sign-9743.svg" width='40' height='30'>
            <div class="delete">Supprimer cet Adhérant ? </div>


            <div class="container-sm buttons mt-3">
                <button type="submit" class="btn btn-danger">Supprimer</button>
                <button type="button" class="btn btn-secondary"
                    onclick="removeContentFrom('.modify','#content')">Annuler</button>
        </form>
    </div>

</div>


</div>