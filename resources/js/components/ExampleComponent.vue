<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Componente de Ejemplo</div>
                    <div class="card-body">
                        Componente de Vuesadsadasd
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
                id:this.$route.params.id,
                datos:{}
            }
        },
        created()
        {
            // this.$http.get('../getTareas/'+this.id).then(function (data) {
                // this.datos = data.body; 
                console.log(this.id);   
            // });
            // this.getDatos();
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            
            getDatos()
            {
                this.$Progress.start();
                axios.get("../getTareas/"+this.id)
                .then(data=>
                {
                    // this.cursos = data.data.cursos;
                    this.$Progress.finish();
                    console.log(data.data);
                }
                ).catch(error=>{
                    console.log(error);
                })
            },
        }
    }
</script>
