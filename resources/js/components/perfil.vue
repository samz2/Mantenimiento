<template>
    <div class="content">
	    <!-- <div class="container-fluid"> -->
	    	<div class="row" v-if="tipo == 1">
				<perfil1></perfil1>
			</div>
			<div class="container-fluid" v-if="tipo == 2">
				<perfil2></perfil2>
			</div>
			<div class="container-fluid" v-if="tipo == 3">
				<perfil3></perfil3>
			</div>
			<div class="container-fluid" v-if="tipo == 4">
				<perfil4></perfil4>
			</div>
			<div class="container-fluid" v-if="tipo == 5">
				<tareaview></tareaview>
			</div>
		<!-- </div> -->
	</div>
</template>
<script>
    export default {
    data() {
        return {
			tipo:null,
			// dni:null,
			// zAlumno:null,
			// niveles:[],
			// grados:[],
			// secciones:[],
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
		// this.getMatriculados();
		// this.getPensiones();
		this.getAutenticacion();
    },
    methods: {
		getAutenticacion()
        {
            this.$Progress.start();
            axios.get("autenticacion")
            .then(data=>
            {
                this.tipo = data.data.id;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            });
            
        },
		// getMatriculados()
		// {
		// 	this.$Progress.start();
		// 	axios.get("getNummatriculados")
		// 	.then(data=>
		// 	{
		// 		this.matriculados = data.data.cantidad;
		// 		this.$Progress.finish();
		// 		console.log(data.data);
		// 	}
		// 	).catch(error=>
		// 	{
		// 		console.log(error);
		// 	})
		// },

		// getPensiones()
		// {
		// 	this.$Progress.start();
		// 	axios.get("/getpensiones")
		// 	.then(data=>
		// 	{
		// 		this.pagadas = data.data.cantidadpagada;
		// 		this.nopagadas = data.data.cantidadnopagada;
		// 		this.$Progress.finish();
		// 		console.log(data.data);
		// 	}
		// 	).catch(error=>
		// 	{
		// 		console.log(error);
		// 	})
		// },
		
    }
}

</script>
