<!DOCTYPE html>
<html>


<body>
    <div>
        <div class="row">
            <div class="col-md-4 col-xl-4 offset-xl-4">
                <section class="card">
                    <h1>Paard Toevoegen</h1>
                    <form name="create" method="post" action="<?=URL?>paard/store">
                        <div class="md-input-group md-ripple"><label class="md-input-label">Naam</label><input class="form-control md-input" type="text" name="naam"></div>
                        <div class="md-input-group md-ripple"><label class="md-input-label">Foto</label><input class="form-control md-input" type="text" name="image"></div>
                        <div class="md-input-group md-ripple"><label class="md-input-label">Discriptie</label><input class="form-control md-input" type="text" name="discription"></div>
                        <div class="md-input-group md-ripple"><label class="md-input-label">Lengte(cm)</label><input class="form-control md-input" type="text" name="lengte"></div>
                        <div class="md-input-group md-ripple"><label class="md-input-label">Tijd</label><input class="form-control md-input" type="text" name="tijd"></div>
                        <div class="md-input-group md-ripple"><label class="md-input-label">Ras</label><input class="form-control md-input" type="text" name="ras"></div>
                        <input class="btn btn-primary btn-block md-btn md-ripple" type="submit" value="Toevoegen">
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
