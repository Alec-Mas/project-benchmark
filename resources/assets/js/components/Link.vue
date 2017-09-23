<template>
    <div class="row">
        <el-row>
            <el-col :span="12" :offset="6">
                <el-alert
                  title="Your unique URL"
                  type="success"
                  show-icon>
                  <p class="el-alert__description" slot="default">{{url}}</p>
                </el-alert>
            </el-col>
        </el-row>
    </div>
</template>
<style>
  .el-row {
    margin-bottom: 20px;
    &:last-child {
      margin-bottom: 0;
    }
  }
  .el-col {
    border-radius: 4px;
  }
  .bg-purple-dark {
    background: #99a9bf;
  }
  .bg-purple {
    background: #d3dce6;
  }
  .bg-purple-light {
    background: #e5e9f2;
  }
  .bg-light-orange {
      background : white;
      color: black;
  }
  .grid-content {
    border-radius: 4px;
    min-height: 36px;
  }
  .row-bg {
    padding: 10px 0;
    background-color: #f9fafc;
  }
</style>
<script>

    export default {
        props: ['code'],
        data() {
            return {
                url: "http://"+window.location.hostname+'/'+this.code,
            }
        },

        watch: {
            '$route' (to, from) {
            }
        },

        created: function()
        {
            //open();
        },
        methods: {
            generateReport()
            {
                var vm = this;
                //url += code;
                console.log(code);
                //vm.$router.push({name: 'Benchmark', params: { code_id:this.$route.params.code_id, link: this.$route.params.link, projects: this.$route.params.projects  }});
            }
        }
    }
</script>
