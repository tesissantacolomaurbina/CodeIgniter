<?php $this->load->view('includes/header'); ?>
        <div class="container">
            <div class="text-center py-5">
                <h2 class="text-center py-5"> Reservas</h2>
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
                    <!-- {% for book in books %} -->
                    <?php foreach($result as $row) {?>
                    <tr>
                        
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->isbn; ?></td>
                        <td><?php echo $row->editorial; ?></td>
                        <td><?php echo $row->publish_year; ?></td>
                        <td><?php echo $row->new_name; ?></td>
                        <td>
                            <a href="<?php echo site_url("UserBookController/devolver");?>/<?php echo $row->id;?>"> Devolver <a>
                        </td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
