<template>
    <div class="container"> <!-- container -->
        <div class="row justify-content-center"> <!-- row -->
            <div class="col-md-8"> <!-- after row -->
                <div class="card"> <!-- card -->
                    <div class="card-header">Data</div> 
                    <div class="card-body"> <!-- card body-->
                     <!-- {{users}} -->
                    <button  @click="addnewuser()" class="btn btn-success">Add User</button>
                    <table class="table" >
                        <tbody> 
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>

                            <tr v-for="(user,index) in users" :key="user.id">
                                <td>{{ user.id }} </td>
                                <td>{{ user.name }} </td>
                                <td>{{ user.email }} </td>
                                <td >
                                    <button @click="viewuser(user.id)"   class="btn btn-primary">edit</button>
                                    <button @click="viewuser(user.id)" class="btn btn-danger">delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- modal -->
                    <div id="addUserModal" class="modal" tabindex="-1" role="dialog" >  <!-- main modal -->
                        <div class="modal-dialog" role="document"> <!--  modal dialog-->
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add User</h5>
                                <button  @click="hidemodal()"  type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <!-- modal content -->
                                <div class="card">
                                <div class="card-body">
                                    
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Name</label>
                                            <div class="col-md-6">
                                                <input v-model="name" id="email" type="email" class="form-control" name="name" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email address</label>
                                            <div class="col-md-6">
                                                <input v-model="email" id="email" type="email" class="form-control" name="email" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                            <div class="col-md-6">
                                                <input v-model="password" id="password" type="password" class="form-control" name="password" required> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Confrim Password</label>
                                            <div class="col-md-6">
                                                <input v-model="confirm_password" id="password" type="password" class="form-control" name="confirm_password" required>
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button @click="storeuser()"  type="button" class="btn btn-primary">Save changes</button>
                                            <button @click="hidemodal()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div> <!--end modal content -->
                            
                            <!-- end modal -->
                            </div> 
                        </div> <!--end modal dialog-->
                    </div> <!-- card main body-->
                </div><!--end  card -->
            </div> <!-- end after row -->
        </div> <!--end row -->
    </div> <!-- end container -->
</template>

<script>
    export default {
        data(){
            return {
                users: '',
                id:'',
                name:'',
                email:'',
                user:'',
                password:'',
                confirm_password:'',
            }
        },
        methods: {
            storeuser(){
                axios.post('/users',{
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    confirm_password: this.confirm_password,
                }).then(response => {
                    alert(response.data.status);
                    this.getUsers();
                    this.hideModal();
                });
            },
            hidemodal(){
                 $('#addUserModal').hide();
            },
            addnewuser(){
                $('#addUserModal').show();
            },
            getUsers(){
                axios.get('/users')
                .then(response => {
                    this.users = response.data.users;
                });
            },
            viewuser(id){
               alert(id);
               alert(JSON.stringify(this.user));
               
            },
        },
        mounted() {
            //console.log('Component mounted.')
            this.getUsers();
        },
    }
</script>
