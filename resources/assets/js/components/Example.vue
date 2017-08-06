<template>

<form-wizard @on-complete="onComplete" ref="wizard" color="#e67e22">
  <tab-content title="Project Scope" icon="ti-user">
    Project Scope Information...
  </tab-content>
  <tab-content title="Budget" icon="ti-settings">
    Project Budget Information...
  </tab-content>
  <tab-content title="Report" icon="ti-check">
    Generate a Report!
  </tab-content>
  <template slot="footer" scope="props">
   <div class=wizard-footer-left>
       <wizard-button  v-if="props.activeTabIndex > 0 && !props.isLastStep" :style="props.fillButtonStyle" class="previous-button">Previous</wizard-button>
    </div>
    <div class="wizard-footer-right">
      <wizard-button v-if="!props.isLastStep"@click.native="props.nextTab()" class="wizard-footer-right" :style="props.fillButtonStyle">Next</wizard-button>

      <wizard-button v-else @click.native="onComplete()" class="wizard-footer-right finish-button" :style="props.fillButtonStyle">{{props.isLastStep ? 'Done' : 'Next'}}</wizard-button>
    </div>

  </template>
</form-wizard>

</template>

<script>

export default {
    methods: {
        onComplete: function() {
          alert('Yay. Done!');
        },
        isLastStep() {
          if (this.$refs.wizard) {

            return this.$refs.wizard.isLastStep
          }
          return false
        }
      }
}

</script>
