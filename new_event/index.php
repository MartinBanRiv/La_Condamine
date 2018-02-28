<div class="container">
  <form class="form-agenda" action="cible_agenda.php" method="post"> <!-- on définit le fichier cible "cible.php" -->
    <h2 class="form-agenda-heading">Ajouter un nouvel événement</h2>
    
    <label for="inputName" class="sr-only">Nom</label>
    <input type="text" name="title" class="form-control" placeholder="Nom" required autofocus>
    
    <label for="inputDescription" class="sr-only">Description</label>
    <input type="text"  name="description" class="form-control" placeholder="Description" required autofocus>

    <label for="inputLieu" class="sr-only">Lieu</label>
    <input type="text"  name="lieu" class="form-control" placeholder="Lieu" required autofocus>


    <label for="inputDate" class="sr-only">Date</label>
    <input type="date" name="date" class="form-control" placeholder="Date" required autofocus>

    <label for="inputTime" class="sr-only">Heure</label>
    <input type="time" name="hour" class="form-control" placeholder="Heure" required autofocus>


    <button class="btn btn-lg btn-block btn-primary" type="submit">Ajouter</button>
  </form>
</div>