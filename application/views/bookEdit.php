<?php $this->load->view('includes/header'); ?>
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row text-center pt-5">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h1 class="h3 mb-3 font-weight-normal py-2">Editar Libro</h1>
                    <hr/>
                    <form method="post" action="<?php echo site_url('BookController/update');?>/<?php echo $row->id;?> ?>">
                        <div class="form-group">
                            <label for="name">Titulo</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <label for="isbn">Isbn</label>
                            <input type="text" class="form-control" name="isbn" value="<?php echo $row->isbn; ?>" placeholder="12345">
                        </div>
                        <div class="form-group">
                            <label for="editorial">Editorial</label>
                            <input type="text" class="form-control" name="editorial" value="<?php echo $row->editorial; ?>" placeholder="Maya">
                        </div>
                        <div class="form-group">
                            <label for="publish_year">Año</label>
                            <input type="text" class="form-control" name="publish_year" value="<?php echo $row->publish_year; ?>" placeholder="2019">
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Author</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="author_id">
                                <option><?php echo $author->id;?> <?php echo $author->name ?></option>    
                                <?php foreach($result as $select) {?>  
                                    <?php if ($select->id != $author->id) {?>
                                        <option><?php echo $select->id;?> <?php echo $select->name ?></option>
                                    <?php } ?>
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
