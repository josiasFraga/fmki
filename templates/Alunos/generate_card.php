<style>
    @font-face {
        font-family: opensansextrabold;
        src: url(<?= $this->Url->webroot('font') ?>/opensans-extrabold.ttf);
    }
    *{margin: 0; padding: 0; font-family: 'opensansextrabold'}
    h1{ font-size: 14px; font-weight: bold; margin-top: 0.3cm; margin-bottom: 0.1cm;}
    .photo{ width: 100%; background-color: #CCC;}
    .label{ font-weight: normal; font-size: 7px;}
    .dado{ font-size: 14px;}
    p{ display: block; width: 100%;}
    .text-right{ text-align: right;}
    .font-bold{ font-weight:bold;}
    .mb-2{ margin-bottom: 6px;}
</style>
<div style="height: 100%; width: 100%; display: flex; justify-content: center;">
    <div style="width: 18cm; height: 6cm; background: rgb(255,0,0);  background: linear-gradient(180deg, rgba(255,0,0,1) 0%, rgba(255,255,255,1) 65%); flex-direction: row; display: flex;">
        <div style="padding: 10px; display: flex; flex: 1">
            <div style="background-color: #FFF; width: 100%; display: flex; flex-direction: column; flex: 1; background-image: url(<?= $this->Url->webroot('img') ?>/misc/bg_card.jpeg); background-size: cover">
                <h1 style="text-align: center; ">CARTEIRA ESTADUAL DE FILIAÇÃO</h1>
                <div style="display: flex; flex-direction: row; padding: 0.2cm; flex: 1">
                    <div style="display: flex; flex: 5;">
                        <div class="photo">
                            <?= $this->Html->image('alunos/foto/'.$aluno->img_dir.'/square_'.$aluno->foto, ["width"=>"100%", "height" => "100%", 'style' => 'object-fit: cover']) ?>
                        </div>
                    </div>
                    <div style="display: flex; flex: 7; flex-direction: column; padding-left: 10px;">
                        <p class="label">Nome:</p>
                        <p class="text-right font-bold mb-2 dado"><?= $aluno['nome'] ?></p>
                        <p class="label">Graduação:</p>
                        <p class="text-right font-bold mb-2 dado"><?= $aluno['graduaco']['titulo'] ?></p>
                        <p class="label">Academia:</p>
                        <p class="text-right font-bold mb-2 dado"><?= $aluno['academia']['nome'] ?></p>
                        <p class="label">Validade:</p>
                        <p class="text-right font-bold mb-2 dado"><?= date('Y') ?></p>
                    </div>
        
                </div>
                <div style="display: flex; flex-direction: row; padding-left: 0.2cm; padding-right: 0.2cm; justify-content: end;">
                    
                    <div>
                        <?= $this->Html->image('logo.png', ["width"=>"20px", "height" => "20px", 'style' => 'margin-right: 5px']) ?>
                    </div>
                    
                    <div>
                        <?= $this->Html->image('logos/cnkb.png', ["height" => "20px",]) ?>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding: 10px; display: flex; flex: 1">
            <div style="background-color: #FFF; width: 100%; display: flex; flex-direction: column; flex: 1; justify-content: center; align-items: center;  background-image: url(<?= $this->Url->webroot('img') ?>/Misc/bg_card.jpeg); background-size: cover">
                <?= $this->Html->image("https://fmki.com.br/wp-content/uploads/2022/04/logo.png", ["width"=>"100px", "height" => "100px"]) ?>
       
                <p style="text-align: center; margin-top: 15px"><strong>www.fmki.com.br</strong></p>
                
            </div>
        </div>
    </div>
</div>