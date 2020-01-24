<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Example Component
                    </div>
                    <div class="card-body">
                        <div id="realtimemap" style="height: 200px; width: 200px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import * as VueGoogleMaps from 'vue2-google-maps';
    export default {

        data(){
            return {
                map:null
            }
        },

        methods:{
            mapInit(){
                this.map = new VueGoogleMaps.maps.Map(document.getElementById('realtimemap'), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 8
                });
            }
        },

        mounted() {
            console.log('Component Mounted');
            this.mapInit();
        },
        created(){
            Echo.channel('location')
                .listen('SendPosition', (e)=>{
                    console.log(e)
                });
        }
    }
</script>