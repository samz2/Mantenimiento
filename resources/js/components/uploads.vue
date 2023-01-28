<template>
    <fieldset class="border p-2">
        <legend class="w-auto text-primary">Archivos <button @click="add()" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button> <button @click="less()" class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button></legend>
        <div class="form-group row" v-for="a in archs" :key="a">
            <div class="col-md-3">
            <label>Archivos :</label>
            </div>
            <div class="col-md-8">
                <input type="file" @change="arc" id="archivo" class="form-control form-control-sm">
                <!-- <input type="file" @change="arc" class="form-control form-control-sm"> -->
            </div> 
        </div>
        <button class="btn btn-success btn-sm" @click="guardar()">Entregar ({{i}}) Archivos</button>
    </fieldset>
</template>
<script>
import { isNullOrUndefined } from 'util';
    export default {
        props:['id'],
    data() {
        return {
            
            archivos:[],
            types:[],
            archs:[],
            i:0,
        }
	},
	created(){
    //    console.log(this.id);
	},
	mounted(){
      
	},
    methods: {
        add()
        {
            this.archs.push(this.i);
            this.i++;
        },
        less()
        {
            if(this.i === 0)
            {
                return;
            }else{
                this.archs.pop();
                this.archivos.pop();
                this.types.pop();
                this.i--;
            }
        },
        arc(e)
        {
            var size = e.target.files[0].size;
            var name = e.target.files[0].name;
            var type = name.split('.').pop();;
            // console.log(size);
            var files = new FileReader();
            files.readAsDataURL(e.target.files[0]);
            files.onload = (e) =>
            {
               this.archivos.push(e.target.result);
               this.types.push(type);
            }
        },
        guardar()
        {
            if(this.archivos.length == 0)
            {
                swal({
                    type  : "error",
                    title : "Error",
                    text  : "debe entregar al menos un archivo"
                });
                return;
            }
            swal({
                imageUrl    : "../img/loading.gif",
                text        : "los archivos se están cargando, por favor no cierre esta ventana",
                showConfirmButton: false
            });
            axios.post("../addTarea",{
                archivos: this.archivos,
                types: this.types,
                tarea: this.id,
			}).then(data=>{
                
                swal({
                    type: data.data.type,
                    title: data.data.title,
                    title: data.data.text,
                    showConfirmButton: false,
                    
                });
				setTimeout(() => {
					location.reload();
				}, 2000);
			}).catch(error=>{
				console.log(error);	
			})
        },
       
        
    }
}
</script>