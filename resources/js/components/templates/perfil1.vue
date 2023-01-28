<template>
	<div class="container-fluid">
		<br><br>
			<div v-if="!cargando1 && !cargando2 && !cargando3" class="row justify-content-center">
				<div  class="spinner-border text-primary" role="status">
				</div>
				<br>
				<b class="text-primary">Cargando Contenido ...</b>
			</div>
            <div class="row" v-else>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
						<div class="inner">
							<h3>{{registrados}}</h3>
							<p>CLIENTES REGISTRADOS</p>
						</div>
						<div class="icon">
							<i class="ion ion-person"></i>
						</div>
							<a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>{{espera}}</h3>

                        <p>TICKETS EN ESPERA</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-card"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                            <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <h3>{{atendidos}}</h3>

                        <p>TICKETS EN PROCESO</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-card"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                        <h3>{{finalizado}}</h3>

                        <p>TICKETS FINALIZADOS</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-cash"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
	</div>    
</template>

<script>
    export default {
    data() {
        return {

			registrados:null,
			atendidos:null,
			espera:null,
			finalizado:null,
			pagadas:null,
			nopagadas:null,
			ingresos:null,
            cargando1:false,
            cargando2:false,
            cargando3:false,
        }
	},
	mounted()
	{
		$('#cod').hide();
		$('#objetivo').hide();
		$('#matricula').hide();
	},
	created()
    {
		this.getRegistrados();
		this.getAtendidos();
    },
    methods: {
  		getAtendidos()
		{
			this.cargando1 = false;
			this.$Progress.start();
			axios.get("getNumAtendidos")
			.then(data=>
			{
				this.cargando1 = true;
				this.atendidos 	= data.data.atendidos;
				this.espera 	= data.data.espera;
				this.finalizado = data.data.finalizado;
				this.$Progress.finish();
				console.log(data.data);
			}
			).catch(error=>
			{
				console.log(error);
			})
		},
		getRegistrados()
		{
			this.cargando2 = false;
			this.$Progress.start();
			axios.get("getNumClientes")
			.then(data=>
			{
				this.cargando2 = true;
				this.registrados = data.data.clientes;
				this.$Progress.finish();
				console.log(data.data);
			}
			).catch(error=>
			{
				console.log(error);
			})
		},
		getPensiones()
		{
			this.cargando3 = false;
			this.$Progress.start();
			axios.get("/getpensiones")
			.then(data=>
			{
				this.cargando3 = true;
				this.pagadas = data.data.pagados;
				this.nopagadas = data.data.nopagados;
				this.$Progress.finish();
				console.log(data.data);
			}
			).catch(error=>
			{
				console.log(error);
			})
		},
		
    }
}
</script>
