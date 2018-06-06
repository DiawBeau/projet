<form method="POST" action="/adherants">
	{{csrf_field()}}
  <div class="form-group">
    <label for="first_name">Nom de l'adhérant</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>

  <div class="form-group">
    <label for="last_name">Prénom de l'adhérant</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="form-group">
    <label for="licence_number">N° licence</label>
    <input type="number" class="form-control" id="licence_number" name="licence_number">
  </div>    

  <button type="submit" class="btn btn-default">Submit</button>

</form>