

<?php




include "adm_nav.php";

?>

    <main>
        <div class="conatiner_cadastrar_evento">
            <div class="title_cadastrar_evento">Editar Palestra</div>
            <div class="body_cadastrar_evento">
                <div class="body_cadastrar_evento_right">
                    <div class="item_flex_2">
                        <label for="">Nome do Evento</label>
                        <input type="text">
                    </div>
                    <div class="item_flex_2">
                        <label for="">Data do Evento</label>
                        <input type="date">
                    </div>
                    <div class="item_flex_2">
                        <label for="">Localização</label>
                        <input type="text">
                    </div>
                    <div class="item_flex_2">
                        <label for="">Descrição</label>
                        <input type="text">
                    </div>
                    <div class="item_flex_2">
                        <label for="">Hora de Inicio</label>
                        <input type="text">
                    </div>
                    <div class="item_flex_2">
                        <label for="">Hora de Término</label>
                        <input type="text">
                    </div>

                </div>
                <div class="body_cadastrar_evento_left">
                    <div class="item_flex_2">
                        <label for="">Status</label>
                        <div class="conatiner_brda_palestra">
                            <div style="background-color: rgb(211, 255, 211); border-color: rgb(50, 181, 50); color: rgb(38, 150, 38);" class="bordar_status">Aberta</div>
                            <div style="background-color: rgb(206, 206, 206); border-color: rgb(32, 32, 32); color: rgb(34, 34, 34);" class="bordar_status">Encerada</div>
                            <div style="background-color: rgb(255, 152, 152); border-color: rgb(188, 17, 17); color: rgb(197, 22, 22);" class="bordar_status">Cancelada</div>
                        </div>
                    </div>
                    <div class="item_flex_2">
                        <label for="">Capacidade Máxima</label>
                        <input type="text">
                    </div>
                    <div class="item_flex_2">
                        <label for="">Palestrante</label>
                        <input type="text">
                    </div>
                    <div class="item_flex_2">
                        <label for="">Acessar</label>
                        <div class="conatiner_flex"><div class="input_fake2">Partcipantes</div>
                        <div class="input_fake2">Fotos</div></div>
                    </div>
                    <div class="conatiner_btn_cadastar_palestra">
                        <a href="">Salvar</a>
                    </div>
                  

                </div>
            </div>

       
    
    </main>
    
</body>
</html>