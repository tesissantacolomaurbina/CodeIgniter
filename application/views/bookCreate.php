<?php $this->load->view('includes/header'); ?>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row text-center pt-5">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="h3 mb-3 font-weight-normal py-2">Crear Libro</h1>
                <hr/>
                <form method="post" action="<?php echo site_url('BookController/create') ?>">
                    <div class="form-group">
                        <label for="name">Titulo</label>
                        <input type="text" class="form-control" name="name" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                        <label for="isbn">Isbn</label>
                        <input type="text" class="form-control" name="isbn" placeholder="12345">
                    </div>
                    <div class="form-group">
                        <label for="editorial">Editorial</label>
                        <input type="text" class="form-control" name="editorial" placeholder="Maya">
                    </div>
                    <div class="form-group">
                        <label for="publish_year">Año</label>
                        <input type="text" class="form-control" name="publish_year" placeholder="2019">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Author</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="author_id">
                            <?php foreach($result as $row) {?>    
                                <option><?php echo $row->id;?> <?php echo $row->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </body>
</html>
