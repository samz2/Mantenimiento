<template>
    <div class="content">
	    <div class="row">
			 <div class="col-md-12">
				<div class="card card-info" id="objetivo">
	                <div class="card-header bg-azul text-center">
	                    <h4 class="title">Agregar Usuario</h4>  
	                </div>
	                <div class="card-body">
						<fieldset class="border p-2">
                            <legend class="w-auto t16 text-primary"><b>Datos</b></legend>
                            <div class="form-group row">  
                                <div class="col-md-2">
                                <label>DNI (*)</label>
                                </div>                             
                                <div class="col-md-2">
                                   <input type="text" v-if="!zEditar" onkeypress='return solonumeros(event)'  v-model="persona.dni" class="form-control form-control-sm"  maxlength="8">
                                   <input type="text" v-if="zEditar" readonly  v-model="persona.dni" class="form-control form-control-sm">
                                </div>
                            </div>    
                            <div class="form-group row">      
                                 <div class="col-md-2 text-left">
                                    <label>Nombres (*)</label>
                                 </div>
                                <div class="col-md-5">
                                    <input type="text" onkeypress='return soloLetras(event)' v-model="persona.nombres" class="form-control form-control-sm"  maxlength="60">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2 text-left">
                                    <label>Apellidos (*)</label>
                                 </div>
                                <div class="col-md-5">
                                <input type="text" onkeypress='return soloLetras(event)' v-model="persona.apellidos" class="form-control form-control-sm"  maxlength="60">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2 text-left">
                                    <label>Dirección (*)</label>
                                 </div>
                                <div class="col-md-5">
                                <input type="text" onkeypress='return soloLetras(event)' v-model="persona.direccion" class="form-control form-control-sm"  maxlength="60">
                                </div>
                            </div>
							<div class="form-group row">
                                <div class="col-md-2 text-left">
                                    <label>Género (*)</label>
                                 </div>
                                <div class="col-md-2">
                                	<select v-model="persona.genero" class="form-control form-control-sm">
										<option value="M">M</option>
										<option value="F">F</option>
									</select>
                                </div>
                            </div>
							<div class="form-group row">
                                <div class="col-md-2 text-left">
                                    <label>Celular (*)</label>
                                 </div>
                                <div class="col-md-3">
                                <input type="text" v-model="persona.celular" class="form-control form-control-sm">
                                </div>
                            </div>
							<div class="form-group row">
                                <div class="col-md-2 text-left">
                                    <label>Correo (*)</label>
                                 </div>
                                <div class="col-md-3">
                                <input type="email" v-model="persona.correo" class="form-control form-control-sm">
                                </div>
                            </div>
							<div class="form-group row">
                                <div class="col-md-2 text-left">
                                    <label>Tipo</label>
                                 </div>
                                <div class="col-md-6">
									<select v-model="persona.tipo" class="form-control form-control-sm">
										<option value="Administrador">Administrador</option>
										<option value="Jefe Soporte Técnico">Jefe Soporte Técnico</option>
										<option value="Soporte Técnico">Soporte Técnico</option>
										<option value="Cliente">Cliente</option>
									</select>
								</div>
                            </div>
							<div class="form-group row">
                                <div class="col-md-2 text-left">
                                    <label>Foto</label>
                                 </div>
                                <div class="col-md-2" v-if="persona.foto == null">
									<div  class="btn btn-default btn-file">
										<i class="fa fa-image"></i> imagen
										<input @change="arc" type="file">
									</div>
                                </div>
								<div class="col-md-4">
									<img v-if="persona.foto != null" :src="'data:'+persona.foto" @click="reset()" alt="" width="120" height="175">
								</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2" v-if="!zEditar">
                                   <button @click="registrar()" class="btn btn-outline-success">Agregar <i class="fa fa-save"></i></button>
                                </div>
                                <div class="col-md-2" v-if="zEditar">
                                   <button @click="editar()" class="btn btn-outline-info">Editar <i class="fa fa-edit"></i></button>
                                </div>
								<div class="col-md-2">
									<button class="btn btn-outline-primary"  @click="matricular(2)">Volver <i class="fa fa-undo"></i></button>
								</div>
                            </div>
                        </fieldset>
						<div class="clearfix"></div>
	                </div>
				</div>
			</div>
	    	</div>
			<div class="row" id="lista">
                <div class="col-md-12">
                    <div class="card card-info">
	                <div class="card-header bg-azul text-center">
	                    <h4 class="title">Lista de Usuarios 
							<button  class="btn bg-navy" @click="ocultar('1')" title="Agregar persona">
								<i class="fa fa-plus"></i>
							</button></h4>  
	                </div>
	                <div class="card-body">
                        <div class="content table-responsive table-full-width">
                            <v-client-table class="t12" :data="personas" :columns="columns" :options="options">
								<!-- <div slot="Matriculado" slot-scope="props">
									<label class="text-primary" v-if="props.row.Estado == 1">Matriculado</label>
									<label class="text-danger" v-else-if="props.row.Estado == 0">No Matriculado</label>
								</div> -->
								<div slot="Acciones" slot-scope="props">
									<button class="altoBoton btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
									<button class="altoBoton btn bg-indigo" data-toggle="modal" v-on:click="verRegistro(props.row.Documento)" title="Ver Registro" data-target="#exampleModal">
                                    	<i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
									<button class="altoBoton btn btn-danger" data-toggle="tooltip" v-on:click="deletepersona(props.row.DNI)" data-placement="left" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
								</div>
					        </v-client-table>
                        </div>
	                </div>
                    </div>
                </div>
            </div>
	    <!-- </div> -->
		<!-- Modal !-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                <div class="modal-header bg-azul text-white text-center">
                    <h5 class=" text-center" id="exampleModalLabel">FICHA persona</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
					<div class="text-center">
						<div v-if="!cargando" class="spinner-border text-primary" role="status">
							<span class="sr-only">Loading...</span>
						</div>
					</div>
					
                    <div class="row" v-if="cargando">
						<!-- <div class="col-md-3">
							<img :src="registro.Foto" alt="" height="185" width="130" style="border: 2px">
						</div> -->
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-4 text-left"><b>DNI: </b></div>
								<div class="col-md-8 text-left">{{persona.dni}}</div>
								<div class="col-md-4 text-left"><b>Nombres: </b></div>
								<div class="col-md-8 text-left">{{persona.nombres}}</div>
								<div class="col-md-4 text-left"><b>Apellidos: </b></div>
								<div class="col-md-8 text-left">{{persona.apellidos}}</div>
								<div class="col-md-4 text-left"><b>Dirección: </b></div>
								<div class="col-md-8 text-left">{{persona.direccion}}</div>
								<div class="col-md-4 text-left"><b>Tipo: </b></div>
								<div class="col-md-8 text-left">{{persona.tipo}}</div>
								<div class="col-md-4 text-left"><b>Correo: </b></div>
								<div class="col-md-8 text-left">{{persona.correo}}</div>
								<div class="col-md-4 text-left"><b>Genero: </b></div>
								<div class="col-md-8 text-left">{{persona.genero}}</div>
								<div class="col-md-4 text-left"><b>Celular: </b></div>
								<div class="col-md-8 text-left">{{persona.celular}}</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12"><hr></div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>
	</div>
</template>

<script>
				
    export default {
    data() {
        return {
			persona:{
				id:null,
				dni:null,
				nombres:null,
				apellidos:null,
				direccion:null,
				celular:null,
				correo:null,
				genero:null
			},
			personas: [{
				DNI			: null,
				Nombre		: null,
				Apellidos	: null,
                Tipo		: null,
				
            }],
            columns: ["Documento","Nombres","Apellidos","Tipo","Acciones"],
            options: {
				perPageValues : [5,10,15,20,25],
                perPage : 5,
                texts: {
                    filter: "Buscar:",
                    count: "Mostando {from} a {to} de {count} registros|{count} registros|Un registro",
                    first: 'Primero',
                    last: 'Último',
                    filterPlaceholder: "Buscar",
                    limit: "Registros:",
                    page: "Pagina:",
                    noResults: "No se encontraron registros",
                    filterBy: "Filtrar por {column}",
                    loading: 'Cargando...',
                    defaultOption: 'Seleccionar {column}',
                    columns: 'Columnas'
                },
				headings:
				{
					Documento	: "DNI",
					Nombres		: "Nombres",
					Apellidos	: "Apellidos",
					Tipo		: "Tipo",
				},
				sortable: ["DNI","Nombre","Apellidos","Tipo","Direccion"],
				filterable: ["DNI","Nombre","Apellidos","Tipo","Direccion"],
				
			},
			dni:null,
			zEditar :false,	
			cargando :false,	
        }
	},
	mounted()
	{
		$('#cod').hide();
		$('#objetivo').hide();
		$('#matricula').hide();
		$('#editar').hide();
		$('#apoderado').hide();
	},
	created()
    {
		this.getPersonas();
		this.getNiveles();
    },
    methods: {
		
		reset()
		{
			this.persona.foto = null;
		},
		arc(e)
        {
            var size = e.target.files[0].size;
			var name = e.target.files[0].name;
			var type = e.target.files[0].type;
			this.persona.ext = name.split('.').pop();
			if(!type.includes("image"))
			{
				swal({
					type : "warning",
					text : "debe seleccionar una imagen",
				});
				return;
			}
			if(size > 1000000)
            {
				swal({
					type : "warning",
					text : "tamaño max. 1mb",
				});
				return;
			}
            var files = new FileReader();
            files.readAsDataURL(e.target.files[0]);
            files.onload = (e) =>
            {
			   this.persona.foto    = e.target.result;
			//    console.log(e.target.result);
            //    this.chat.name       = name;   
            }
            console.log("look"+this.persona.foto);
            // console.log(this.types);
            
        },
		load()
		{
			this.id			= null;
			this.nombres	= null;
			this.apellidos	= null;
			this.direccion	= null;
			this.celular	= null;
			this.correo		= null;
			this.genero		= null;
			this.zEditar	= false;
		},
        registrar()
		{
			axios.post("addPersona",{
				persona:this.persona
			}).then(data=>{

				swal({
					type: data.data.type,
					title: data.data.title,
					text: data.data.text,
					showConfirmButton: false,
					timer: 2000
				});
				// setTimeout(() => {
				// 	location.reload();
				// }, 1500);
				this.load();
				this.ocultar(2);
				this.getDatos();
			}).catch(error=>{
				swal({
					type: 'error',
					title: 'Error',
					text: "Consulte con un administrador",
					showConfirmButton: true,
				});
				console.log(error);
			})
		},
		editar()
		{
			axios.post("editpersona",{
				persona:this.persona
			}).then(data=>{
  				swal({
					// position: 'top-end',
					type: 'success',
					title: 'OK',
					text: 'persona Editado Correctamente',
					showConfirmButton: false,
					timer: 2000
				});
				this.getDatos();
				this.load();
				this.ocultar(2);
			}).catch(error=>{
				swal({
					type: 'error',
					title: 'Error',
					text: "Consulte con un administrador",
					showConfirmButton: true,
				});
			})
		},
		
		lectivo()
		{
			var lectivo = parseInt(this.matricula.lectivo);
			if(lectivo<=2000 || lectivo >=2100)
			{
				$("#lectivo").css( "background-color", "red" );
			}else
			{
				$("#lectivo").css( "background-color", "white" );
			}
			console.log(this.matricula.lectivo);
		},
		
		getPersonas()
        {
            this.$Progress.start();
            axios.get("getPersonas")
            .then(data=>
            {
                this.personas = data.data.personas;
                this.$Progress.finish();
                // console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		deletepersona(id)
        {
			this.$Progress.start();
            swal({
                title: '¿Deseas eliminar este persona?',
                text: "No será posible revertir esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'cancelar',
            }).then((result) => {
                if (result.value) {
                    axios.get(`/deletepersona/${id}`)
                        .then(data => {
                        if(data.data=="OK"){
                            swal(
                            'Eliminado!',
                             'El persona ha sido eliminado.',
                             'success'
								);
						this.$Progress.finish();
						this.getDatos();
                        }
                        }).catch(error => {
                            console.log('Ocurrio un error ' + error);
                            this.$Progress.fail();
                        });
                     }
                });
		},
		ocultar(id){
			if(id == '1')
			{
				this.load();
				$('#objetivo').show();
				$('#matricula').hide();
				$('#editar').hide();
				$('#agregar').show();
				$('#lista').hide();
				$('#apoderado').hide();
			}
			else if(id == '2')
			{
				$('#lista').show();
				$('#objetivo').hide();
				$('#matricula').hide();
				$('#apoderado').hide();	
			}
			
		},
		getNiveles()
        {
            this.$Progress.start();
            axios.get("getNiveles")
            .then(data=>
            {
                this.niveles = data.data.niveles;
                this.$Progress.finish();
                // console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		edit(dni,nombre,paterno,materno,genero,dir,fecha)
		{
			$('#objetivo').show();
			$('#agregar').hide();
			$('#editar').show();
			$('#lista').hide();
			this.zEditar		= true;
			this.persona.dni 	= dni;
			this.persona.nombre 	= nombre;
			this.persona.pater  	= paterno;
			this.persona.mater  	= materno;
			this.persona.dir    	= dir;
			this.persona.fecha  	= fecha;
			this.persona.genero 	= genero;
		},
		verRegistro(id)
        {
			this.cargando = false;
            this.$Progress.start();
            axios.get("/getPersona/"+id)
            .then(data=>
            {
				this.cargando 	= true;
				this.persona	= data.data.persona;
                this.$Progress.finish();
                // console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
    }
}

</script>
