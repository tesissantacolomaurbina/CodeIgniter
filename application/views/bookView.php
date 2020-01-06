<?php $this->load->view('includes/header'); ?>
        <div class="container">
            <div class="text-center py-5">
                <h2 class="text-center py-5"> Biblioteca</h2>
                <form class="form-inline mb-5">
                    <div class="ml-auto mr-auto">
                    <?php if ($this->session->userdata('level') === '1') {?>
                        <a href="<?php echo site_url('BookController/createfirst') ?>" class="btn btn btn-primary my-2 my-sm-0" role="button">Crear</a>
                    <?php } ?>
                    </div>
                </form>
            <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Titulo</td>
                        <td>Isbn</td>
                        <td>Editorial</td>
                        <td>Año de Publicacion</td>
                        <td>Autor</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $row) {?>
                    <tr>
                        
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->isbn; ?></td>
                        <td><?php echo $row->editorial; ?></td>
                        <td><?php echo $row->publish_year; ?></td>
                        <td><?php echo $row->author_name; ?></td>
                        <td>
                        <?php if ($this->session->userdata('level') === '2') {?>
                            <a href="<?php echo site_url("BookController/reservar");?>/<?php echo $row->id;?>"> Reservar <a>
                        <?php } else {?>
                            <a href="<?php echo site_url("BookController/edit");?>/<?php echo $row->id;?>"> Editar <a>
                            <a href="<?php echo site_url("BookController/delete");?>/<?php echo $row->id;?>"> Eliminar <a>
                        <?php }
                        ?> 
                        </td>
                    <?php } ?>
 
                    </tr>
                </tbody>
            </table>
        </div>

    </body>
</html>
