

<template>

<div class="row">
    <div class="page-title">Benchmark your project</div>
    <div class="page-subtitle">Take 2 minutes to see how you compare</div>
    <div class="benchmark-form">
        <form-wizard title="" subtitle="" @on-complete="onComplete" shape="circle" color="#F57421" error-color="#ff0000">
            <tab-content title="Project Scope" icon="ti-search" :before-change="validateFirstStep">
            <!--<tab-content title="Project Scope" icon="ti-search">-->
                <el-form :inline="false" :model="scope" class="demo-form-inline" :rules="rules" ref="scopeForm">
                    <el-form-item prop="name">
                        <el-input v-model="scope.name" placeholder="What's the name of your project?"></el-input>
                    </el-form-item>
                    <el-form-item prop="industry">
					<el-select v-model="scope.industry" placeholder="Project Industry">
						<el-option
							v-for="item in options"
							:key="item.value"
							:label="item.label"
							:value="item.value">
						</el-option>
					</el-select>
                    </el-form-item>
                    <el-form-item prop="size">
                        <el-input v-model.number="scope.size" type="number" placeholder="Team Size"></el-input>
                    </el-form-item>
                    <el-form-item prop="startdate">
                        <div class="block">
                            <el-date-picker v-model="scope.startdate" format="yy-MM-dd" type="date" placeholder="Project Start Date">
                            </el-date-picker>
                        </div>
                    </el-form-item>
                    <el-form-item prop="enddate">
                        <div class="block">
                            <el-date-picker v-model="scope.enddate" format="yy-MM-dd" type="date" placeholder="Estimated End Date">
                            </el-date-picker>
                        </div>
                    </el-form-item>
                    <el-form-item prop="actualdate">
                        <div class="block">
                            <el-date-picker v-model="scope.actualdate" format="yy-MM-dd" type="date" placeholder="Actual End Date">
                            </el-date-picker>
                        </div>
                    </el-form-item>
                </el-form>

            </tab-content>
            <tab-content title="Project Budget" icon="ti-money" :before-change="validateSecondStep">
            <!--<tab-content title="Project Budget" icon="ti-money">-->
                <el-form :inline="false" :model="budget" class="demo-form-inline" :rules="rules" ref="budgetForm">
                    <el-form-item prop="start">
                        <el-input v-model.number="budget.start" type="number" placeholder="How much was your budget?"></el-input>
                    </el-form-item>
                    <el-form-item prop="actual">
                        <el-input v-model.number="budget.actual" type="number" placeholder="What's did you actually spend?"></el-input>
                    </el-form-item>
                </el-form>
            </tab-content>
            <tab-content title="Finalisation" icon="ti-email" :before-change="validateThirdStep">
                <el-form :inline="false" :model="finalise" class="demo-form-inline" :rules="rules" ref="emailForm">
                    <el-form-item prop="email">
                        <el-input v-model="finalise.email" placeholder="What's your email address?"></el-input>
                    </el-form-item>
                </el-form>

            </tab-content>

            <el-button type="primary" class="previous-button" slot="prev">Back</el-button>
            <el-button type="primary" class="forward-button" slot="next">Next</el-button>
            <el-button type="success" slot="finish">Finish</el-button>

        </form-wizard>
    </div>
</div>

</template>

<script>

export default {
    data() {
            var checkAge = (rule, value, callback) => {
                if (!value) {
                    return callback(new Error('Please input the age'));
                }
                setTimeout(() => {
                    if (!Number.isInteger(value)) {
                        callback(new Error('Please input digits'));
                    } else {
                        if (value < 18) {
                            callback(new Error('Age must be greater than 18'));
                        } else {
                            callback();
                        }
                    }
                }, 1000);
            }
            return {
				options: [{
					  value: 'Agriculture and Mining',
					  label: 'Agriculture and Mining'
					}, {
					  value: 'Business Services',
					  label: 'Business Services'
					}, {
					  value: 'Computer and Electronics',
					  label: 'Computer and Electronics'
					}, {
					  value: 'Consumer Services',
					  label: 'Consumer Services'
					}, {
					  value: 'Education',
					  label: 'Education'
					}, {
					  value: 'Energy and Utilities',
					  label: 'Energy and Utilities'
					}, {
					  value: 'Financial Services',
					  label: 'Financial Services'
					}, {
					  value: 'Business Services',
					  label: 'Business Services'
					}, {
					  value: 'Government',
					  label: 'Government'
					}, {
					  value: 'Health, Pharmaceuticals, and Biotech',
					  label: 'Health, Pharmaceuticals, and Biotech'
					}, {
					  value: 'Business Services',
					  label: 'Business Services'
					}, {
					  value: 'Manufacturing',
					  label: 'Manufacturing'
					}, {
					  value: 'Media and Entertainment',
					  label: 'Media and Entertainment'
					}, {
					  value: 'Non-profit',
					  label: 'Non-profit'
					}, {
					  value: 'Real Estate and Construction',
					  label: 'Real Estate and Construction'
					}, {
					  value: 'Consumer Services',
					  label: 'Consumer Services'
					}, {
					  value: 'Retail',
					  label: 'Retail'
					}, {
					  value: 'Software and Internet',
					  label: 'Software and Internet'
					}, {
					  value: 'Telecommunications',
					  label: 'Telecommunications'
					}, {
					  value: 'Transportation and Storage',
					  label: 'Transportation and Storage'
					}, {
					  value: 'Travel Recreation and Leisure',
					  label: 'Travel Recreation and Leisure'
					}, {
					  value: 'Wholesale and Distribution',
					  label: 'Wholesale and Distribution'
					}, {
						value: 'Other',
						label: 'Other'
					}],
				value: '',
                scope: {
                    name: '',
                    industry: '',
                    size: '',
                    startdate: '',
                    enddate: '',
                    actualdate: ''
                },
                budget: {
                    start: '',
                    actual: ''
                },
                finalise: {
                    email: ''
                },
                rules: {
                    name: [{
                        required: true,
                        message: 'Please input Project Name.',
                        trigger: 'blur'
                    }, {
                        min: 3,
                        max: 25,
                        message: 'Length should be 3 to 25.',
                        trigger: 'blur'
                    }],
                    industry: [{
                        required: true,
                        message: 'Please enter an Industry.',
						trigger: 'change'
                    }],
                    size: [{
                        type: "number",
                        message: 'Please enter a digit.'
                    }, {
                        required: true,
                        message: 'Please enter a number.'
                    }],
                    startdate: [{
                        type: 'date',
                        required: true,
                        message: 'Please enter a Project Start Date.',
                        trigger: 'change'
                    }],
                    enddate: [{
                        type: 'date',
                        required: true,
                        message: 'Please enter a Project End Date.',
                        trigger: 'change'
                    }],
                    actualdate: [{
                        type: 'date',
                        required: true,
                        message: 'Please enter a Project Actual End Date.',
                        trigger: 'change'
                    }],
                    start: [{
                        type: "number",
                        message: 'Please enter a digit.'
                    }, {
                        required: true,
                        message: 'Please enter a number.'
                    }],
                    actual: [{
                        type: "number",
                        message: 'Please enter a digit.'
                    }, {
                        required: true,
                        message: 'Please enter a number.'
                    }],
                    email: [{
                        type: 'email',
                        message: 'Please enter a valid email address.'
                    }, {
                        required: true,
                        message: 'Please enter an email address.'
                    }]
                }
            }
        },
        methods: {
            onComplete: function() {

                var vm = this;
                // Create the Email Link
                axios.post('generate-link', {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    f: this.finalise,
                })
                .then(function (response) {
                    console.log(response);
                    //vm.$router.push({ path: `/get-link/${response.data}` });

                })
                .catch(function (error) {
                    console.log(error);
                });


                // Create the Project
                axios.post('generate-report', {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    s: this.scope,
                    b: this.budget,
                    f: this.finalise,
                })
                .then(function (response) {
                    console.log(response);
                    //vm.$router.push({name: 'Link', params: { code_id: response.data }});
                    //url = "http://"+window.location.hostname+'/'+response.data,
                    console.log("http://"+window.location.hostname+'/'+response.data);
                    window.location.href = "http://"+window.location.hostname+'/'+response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });

            },
            validateFirstStep() {
                return new Promise((resolve, reject) => {
                    this.$refs.scopeForm.validate((valid) => {
                        resolve(valid);
                    });
                })

            },
            validateSecondStep() {
                return new Promise((resolve, reject) => {
                    this.$refs.budgetForm.validate((valid) => {
                        resolve(valid);
                    });
                })
            },
            validateThirdStep() {
                return new Promise((resolve, reject) => {
                    this.$refs.emailForm.validate((valid) => {
                        resolve(valid);
                    });
                })
            }
        }
}

</script>
