<template>
    <form  class="form-subscribe">
        <ul class="alert alert-danger list-group" v-if="errors.length >0">
            <li class="list-group-item" v-for="error in errors" :key="errors.indexOf(error)">
                {{ error }}
            </li>
        </ul>
        <div class="form-group mb-3">
            <input type="text" v-model="fname" class="form-control border-white text-white bg-transparent" placeholder="Enter full name" aria-label="Enter Email" aria-describedby="button-addon2">
        </div>
        <div class="form-group mb-3">
            <input type="text" v-model="email" class="form-control border-white text-white bg-transparent" placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
        </div>
        <div class="form-group">
            <button class="btn btn-primary px-5" type="submit" @click="attemptSubs()":disabled="!isValid">Subscribe</button>
        </div>
    </form>
</template>

<script>
    import axios from 'axios'
    export default {


        data:function(){
            return{
                fname:'',
                email: '',
                loading: false,
                errors : []
            }

        },

        computed:{
            isValid: function(){
                return this.validEmail() && this.fname && !this.loading
            }
        },
        methods:{
            validEmail(){
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
                {
                    return true;
                }
                else {
                    return false;
                }
            },
            attemptSubs(){
                this.errors = [];
                this.loading = true;

                axios.post('/subscribe',{
                    fname: this.fname,
                    email: this.email,
                }).then(resp=>{
                    location.reload();
                }).catch(error=>{
                    this.loading=false;
                    if(error.response.status == 422){
                        this.errors.push("You are already a Subscriber");
                    }
                    else{
                        this.errors.push("Please refresh your page");
                    }

                })


            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
