<section class="content">
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3><?= $n_academias ?></h3>

            <p>Academias Cadastradas</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3><?= $n_alunos ?></h3>

            <p>Alunos Cadastrados</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3><?= $n_campeonatos ?></h3>

            <p>Campeonatos Cadastrados</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <?php
                echo $this->Html->link(
                    'Mais Informações <i class="fas fa-arrow-circle-right"></i>',
                    '/campeonatos',
                    [
                      'class' => 'small-box-footer', 
                      'escape' => false
                    ]
                );
            ?>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3><?= $n_inscricoes_last_campeonato ?></h3>

            <p>Inscrições no último campeonato</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <?php
                echo $this->Html->link(
                    'Mais Informações <i class="fas fa-arrow-circle-right"></i>',
                    '/campeonato-inscricoes',
                    [
                      'class' => 'small-box-footer', 
                      'escape' => false
                    ]
                );
            ?>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>