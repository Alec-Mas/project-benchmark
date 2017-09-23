<template>
    <div class="benchmark-report">
        <div class="row">
            <div id="app">
            </div>
            <div class="page-title">How did you track?</div>
            <div class="benchmark-form">
                <p class="center-block">{{link}}</p>
                <p class="center-block">{{projects}}</p>
                <!--@foreach ($projects as $p)
                <p class="center-block">{{ $p->project_name }}</p>
                @endforeach-->
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                code_id: this.$route.params.code_id,
                projects: this.$route.params.projects,
                link: this.$route.params.projects,
            }
        },
        created: function()
        {

        },

        methods: {

        }
    }
</script>
