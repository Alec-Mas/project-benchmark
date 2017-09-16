<template>
    <div class="benchmark-report">
        <h1 class="center-block">Projects</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Industry</td>
                <td>Size</td>
                <td>Start</td>
                <td>End</td>
                <td>Actual End</td>
                <td>Budget</td>
                <td>Actual Budget</td>
            </tr>
            </thead>

            <tbody>
                <!--<tr v-for="project in projects">
                    <td>{{ project.id }}</td>
                    <td>{{ project.project_name }}</td>
                    <td>{{ project.project_industry }}</td>
                    <td>{{ project.project_size }}</td>
                    <td>{{ project.project_start }}</td>
                    <td>{{ project.project_end }}</td>
                    <td>{{ project.project_actual_end }}</td>
                    <td>{{ project.project_budget }}</td>
                    <td>{{ project.project_actual_budget }}</td>
                </tr>-->
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {

        watch: {
            '$route' (to, from) {
                this.fetchItems();
            }
        },

        created: function()
        {
            this.fetchItems();
        },

        methods: {
            fetchItems()
            {
                axios.get('generate/'+this.$route.params.code)
                .then((response) => {
                    console.log(response.data);
                });
              /*axios.get(uri , {
                  _token: $('meta[name="csrf-token"]').attr('content'),
                  c: this.$route.params.code,
              })
              .then((response) => {
                  console.log(response.data);
              });*/

              /*axios.post('generate', {
                  _token: $('meta[name="csrf-token"]').attr('content'),
                  code: this.$route.params.code,
              })
              .then(function (response) {
                console.log(response);
              })
              .catch(function (error) {
                console.log(error);
            });*/
                console.log(this.$route.params.code);
                console.log($('meta[name="csrf-token"]').attr('content'));
            }
        }
    }
</script>
