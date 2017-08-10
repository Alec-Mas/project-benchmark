

<template>

<form-wizard title="see how your project performed." subtitle="In just a few simple steps." @on-complete="onComplete" shape="circle" color="#F57421" error-color="#ff4949">
    <tab-content title="personal details" icon="ti-search" :before-change="validateFirstStep">
    <!--<tab-content title="Project Scope" icon="ti-search">-->
        <el-form :inline="false" :model="formInline" class="demo-form-inline" :rules="rules" ref="ruleForm">
            <el-form-item prop="name">
                <el-input v-model="formInline.name" placeholder="What's the name of your project?"></el-input>
            </el-form-item>
            <el-form-item prop="industry">
                <el-input v-model="formInline.industry" placeholder="Project Industry"></el-input>
            </el-form-item>
            <el-form-item prop="size">
                <el-input v-model.number="formInline.size" placeholder="Team Size"></el-input>
            </el-form-item>
            <el-form-item prop="startdate">
                <div class="block">
                    <el-date-picker v-model="formInline.startdate" type="date" placeholder="Project Start Date">
                    </el-date-picker>
                </div>
            </el-form-item>
            <el-form-item prop="enddate">
                <div class="block">
                    <el-date-picker v-model="formInline.enddate" type="date" placeholder="Estimated End Date">
                    </el-date-picker>
                </div>
            </el-form-item>
            <el-form-item prop="actualdate">
                <div class="block">
                    <el-date-picker v-model="formInline.actualdate" type="date" placeholder="Actual End Date">
                    </el-date-picker>
                </div>
            </el-form-item>
        </el-form>

    </tab-content>
    <tab-content title="Project Budget" icon="ti-money" :before-change="validateSecondStep">
    <!--<tab-content title="Project Budget" icon="ti-money">-->
        <el-form :inline="false" :model="budget" class="demo-form-inline" :rules="rules" ref="budgetForm">
            <el-form-item prop="start">
                <el-input v-model.number="budget.start" placeholder="How much was your budget?"></el-input>
            </el-form-item>
            <el-form-item prop="actual">
                <el-input v-model.number="budget.actual" placeholder="What's did you actually spend?"></el-input>
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
                formInline: {
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
                        trigger: 'blur'
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
                alert('Yay. Done!');
            },
            validateFirstStep() {
                return new Promise((resolve, reject) => {
                    this.$refs.ruleForm.validate((valid) => {
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
