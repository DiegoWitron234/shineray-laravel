<!-- resources/views/partials/empresa-modal.blade.php -->

<div class="modal" id="modalEmpresa">
    <div class="modal-overlay" id="overlayEmpresa"></div>

    <div class="modal-content">
        <button type="button" class="modal-close" id="cerrarEmpresa">&times;</button>
        <h2 class="modal-title">Perfil de la compañía</h2>

        <div class="modal-body">
            <p>
                Fundada en 1997, <strong>East Shineray Group Co. Ltd</strong> es una empresa a gran escala que se dedica a sectores como la fabricación, los servicios financieros y los viajes inteligentes. Tras años de desarrollo, <strong>Shineray Group</strong> ha creado una plataforma integrada de desarrollo industrial y financiero 4+1 que incluye <strong>automóviles</strong>, <strong>motocicletas</strong> de alta gama, <strong>maquinaria agrícola</strong> y universal, <strong>movilidad inteligente</strong> y <strong>arrendamiento financiero</strong>.
            </p>
            <p>
                El <strong>Grupo Shineray</strong> siempre se ha ceñido a su misión de “<span style="color: #f32735;">crear riqueza material, intelectual y espiritual y compartirla con los empleados, los clientes y la sociedad</span>”. Con una visión internacional, <strong>Shineray</strong> está firmemente comprometida con la fabricación integrada. Siguiendo el objetivo de desarrollo con la industria combinada, la financiación e Internet, <strong>Shineray</strong> se dedica a construir una <strong>empresa de confianza y respetada</strong>.
            </p>
            <p>
                Ha ganado sucesivamente los premios de Marca Famosa de China, Laboratorio Nacional, Mejor Empresa de Crédito de China, 500 Mejores Empresas Manufactureras de China, Empresas de Alta Tecnología, 50 Mejores Empresas Privadas de Chongqing, 50 Mejores Empresas Industriales de Chongqing, Empresas de Chongqing que se rigen por contrato y son dignas de confianza, Empresa Modelo de Comercio Electrónico Internacional de Chongqing, Empresa Más Feliz de Chongqing, Unidad Civilizada Nacional y muchos otros honores.
            </p>
            <p><strong>Sobre SWM Motors:</strong></p>
            <p>
                <strong>La marca SWM fue fundada en Italia en 1971.</strong> Shineray Holdings realizó la compra de SWM en 2014. <strong>En 2016, Brilliance Shineray Chongqing Automobile Co., Ltd.</strong> de Shineray Holdings incorporó formalmente SWM a la nueva marca de vehículos de pasajeros: SWM Motors.
            </p>
            <p>
                <strong>SWM Motors</strong> estableció respectivamente su Centro de Diseño y su Centro de I+D en Milán, Italia y en Chongqing (China). SWM Motors construyó en el distrito de Fuling, Chongqing, una sede con una <strong>producción anual de 300.000 vehículos completos y 300.000 motores.</strong>
            </p>
        </div>
    </div>
</div>

<style>
    .modal { display: none; position: fixed; z-index: 9999; top: 0; left: 0; width:100%; height:100%; }
    .modal-overlay { position: fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); }
    .modal-content {
        position: relative; background:#fff; width:90%; max-width:600px;
        margin:50px auto; border-radius:8px; padding:20px 30px;
        max-height: 80vh; overflow-y: auto; box-shadow:0 4px 10px rgba(0,0,0,0.3);
    }
    .modal-close {
        position:absolute; top:15px; right:20px; background:none; border:none;
        font-size:28px; color:#666; cursor:pointer;
    }
    .modal-title { margin-top:0; font-size:24px; font-weight:600; }
    .modal-body p { margin-bottom:1em; line-height:1.5; color:#333; }
</style>
