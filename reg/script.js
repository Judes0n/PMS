$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
      excluded: [':disabled',':hidden',':not(:visible)','.group'],
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fname: {
                validators: {
                    regexp: {
                        regexp: /^[a-zA-Z\.]+$/,
                        message: 'Full Name Can Only Consist of Alphabets and Dots'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'Fullname must be more than 4 and less than 30 characters long'
                    },
                        notEmpty: {
                        message: 'Please Enter Your Full Name'
                    }
                }
            },
            bday: {
                validators: {
                    lessThan: {
                        enabled: false,
    
                        },
                    greaterThan: {
                        enabled: false,
                    },
                    }
                },
             age: {
                validators: {
                    lessThan: {
                        value: 60,
                        inclusive: true,
                        message: 'Age has to be less than 60'
                    },
                    greaterThan: {
                        value: 18,
                        inclusive: true,
                        message: 'Age has to be Greater than or Equals to 18'
                    },
                    notEmpty: {
                        enabled:false,
                        message: 'Please Enter Your Age',
                    }
                }
            },
			 educ: {
                validators: {
                  regexp: {
                        regexp: /^[a-zA-Z,\.]+$/,
                        message: 'Educational Qualifications Can Only Consist of Alphabets and Commas'
                    },
                    stringLength: {
                        min: 3,
                        max: 50,
                        message: 'Educational Qualification must be more than 3 and less than 50 characters long'
                    },
                    notEmpty: {
                        message: 'Please Enter Your Educational Qualification'
                    }
                }
            },
            occup: {
                validators: {
                  regexp: {
                        regexp: /^[a-zA-Z,\.]+$/,
                        message: 'Occupation Can Only Consist of Alphabets and Commas'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'Occupation must be more than 5 and less than 30 characters long'
                    },
                    notEmpty: {
                        message: 'Please Enter Your Occupation'
                    }
                }
            },
			cnct: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter Your Contact Number'
                    },
                    regexp: {
                        regexp: /^[6-9]\d{9}$/,
                        message: 'Enter A Valid Phone Number!'
                    }
                }
            },
            addrs: {
                validators: {
                  stringLength: {
                        min: 6, 
                        message: 'Address Must Be More than 6 Characters Long',  
                  },
                    notEmpty: {
                        message: 'Please Enter Your Address'
                    },
                }
            },
            weight: {
                validators: {
                  lessThan: {
                        value: 150,
                        inclusive: true,
                        message: 'Weight has to be less than 150 Kg'
                    },
                    greaterThan: {
                        value: 40,
                        inclusive: false,
                        message: 'Weight has to be Greater than or Equals to 40 Kg'
                    },
                    notEmpty: {
                        message: 'Please Enter Your Weight'
                     }
                }
            },
            insta: {
                validators: {
                  uri: {
                        allowLocal: true,
                        message: 'Given is Not a Valid URL'
                    } ,
                    notEmpty: {
                        message: 'Please Enter Your Insta URL'
                    }   
                }
            },
			 height: {
                validators: {
                  lessThan: {
                        value: 202,
                        inclusive: true,
                        message: 'Height has to be less than 202 cm'
                    },
                    greaterThan: {
                        value: 100,
                        inclusive: false,
                        message: 'Height has to be Greater than or Equals to 100'
                    },
                    notEmpty: {
                        message: 'Please Enter Your Height in cm'
                    }
                }
            }
                
            }
      })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
