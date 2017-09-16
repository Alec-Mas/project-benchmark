<template>
    <div class="row">
        <div class="page-title">Your own unique code</div>
        <div class="page-subtitle">Keep it safe!</div>
        <div class="benchmark-report">
            <el-row>
                <el-col :span="12" :offset="6"><div class="grid-content bg-light-orange center-block" style="padding: 5px;"><a v-bind:href="url">{{ url }}</a></div></el-col>
            </el-row>
        </div>
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
        data() {
            return {
                url: "http://"+window.location.hostname+'/'+this.$route.params.code,
            }
        },

        watch: {
            '$route' (to, from) {
            }
        },

        created: function()
        {
            console.log(this.$route);
            //open();
        },

        methods: {
            open() {
                const h = this.$createElement;
                this.$message({
                    message: h('p', null, [
                        h('span', null, 'Unique code generated '),
                        h('i', { style: 'color: green' }, $route.params.code)
                    ])
                });
            },
        }
    }
</script>
