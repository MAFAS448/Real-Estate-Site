$(function(){

  $.validator.addMethod( "nowhitespace", function( value, element ) {
  	return this.optional( element ) || /^\S+$/i.test( value );
  }, "No white space please" );

  $.validator.addMethod( "strongPassword", function( value, element ) {
  	return this.optional( element )
    || value.length>=4
    && /\d/.test( value )
    && /[a-z]/i.test( value );
  }, "Your password must be at least 6 charectors and contain one number and one charector." );

  $.validator.addMethod( "integer", function( value, element ) {
  	return this.optional( element ) || /^-?\d+$/.test( value );
  }, "A positive or negative non-decimal number please" );

  $.validator.addMethod( "lettersonly", function( value, element ) {
  	return this.optional( element ) || /^[a-z]+$/i.test( value );
  }, "Letters only please" );

  $.validator.addMethod( "alphanumeric", function( value, element ) {
  	return this.optional( element ) || /^\w+$/i.test( value );
  }, "Letters, numbers, and underscores only please" );

  $.validator.addMethod( "dateFA", function( value, element ) {
  	return this.optional( element ) || /^[1-4]\d{3}\/((0?[1-6]\/((3[0-1])|([1-2][0-9])|(0?[1-9])))|((1[0-2]|(0?[7-9]))\/(30|([1-2][0-9])|(0?[1-9]))))$/.test( value );
  }, $.validator.messages.date );

  $.validator.addMethod("nicValidate", function(value, element){
    return this.optional(element) || /^\d{9}[VX]$/i.test(value);
//    return this.optional(element) || /^[1-9]{9}[vVxX]$/i.test(value);
  }, "Please enter a valid NIC number");

  $.validator.addMethod( "epCheck", function( value, element ) {
  	return this.optional( element ) || /^[EP]{2}\d{4}$/i.test( value );
  }, "Please enter by starting with EP followed by 4 or 5 digits." );

  $.validator.addMethod( "courseCheck", function( value, element ) {
    return this.optional( element ) || /^[IS]{2}\d{5}$/i.test( value );
  }, "Please enter by starting with IS followed by 5 digits." );

  $.validator.addMethod("notNumber", function(value, element, param) {
    var reg = /[0-9]/;
    if(reg.test(value)){
    return false;
    }else{
    return true;
    }
    }, "Number is not permitted");

  $.validator.setDefaults({
    errorClass: 'help-block',
    highlight:function(element){
      $(element)
        .closest('.form-group')
        .addClass('has-error');
    },
    unhighlight:function(element){
      $(element)
        .closest('.form-group')
        .removeClass('has-error');
    }
  });


  $("#register").validate({
    rules:{
      title:{
        required: true,
        maxlength: 8
      },
      pass1:{
        required: true,
      //  strongPassword: true,
        maxlength: 10
      },
      pass2:{
        required: true,
        equalTo: "#password"
      },
    },
    messages:{
      title:{
        required: 'Please enter an username.',
      },
      pass1:{
        required: 'Please enter a password.'
      },
      pass2:{
        required: 'Please re-type the password.'
      },
    }
  });

  $("#login").validate({
    rules:{
      u_name:{
        required: true,
        maxlength: 8
      },
      pass:{
        required: true,
        maxlength: 10
      }

    },
    messages:{
      u_name:{
        required: 'Please enter your username.',
      },
      pass:{
        required: 'Please enter your password.'
      }
    }
  });

  $("#basic").validate({
    rules:{
      reg_no:{
        required: true,
        nowhitespace: true,
        maxlength: 12
      },
      ep_no:{
        required: true,
        nowhitespace: true,
        epCheck: true,
        maxlength: 6
      },
      f_name:{
        required: true,
        nowhitespace: true,
        lettersonly: true,
        notNumber: true,
        maxlength: 20
      },
      m_name:{
        nowhitespace: true,
        lettersonly: true,
        notNumber: true,
        maxlength: 20
      },
      l_name:{
        required: true,
        nowhitespace: true,
        lettersonly: true,
        maxlength: 20,
        notNumber: true
      },
      address:{
        required: true,
      },
      nic_no:{
        required: true,
        nicValidate: true,
        maxlength: 10
      },
      dob:{
        required: true,
        dateFA: true,
        maxlength: 10
      },
      mobile_no:{
        required: true,
        nowhitespace: true,
        number: true,
        maxlength: 10
      },
      home_tpno:{
        required: true,
        nowhitespace: true,
        integer: true,
        maxlength: 10
      },
      email:{
        required: true,
        email: true
      },
      ol_results:{
        required: true,
        maxlength: 29
      },
      al_results:{
        required: true,
        maxlength: 8
      },
      f_occupation:{
        required: true,
        notNumber: true,
        maxlength: 50
      },
      m_occupation:{
        required: true,
        notNumber: true,
        maxlength: 50
      },
      siblings:{
        required: true,
        maxlength: 25
      },
      dist_home:{
        required: true,
        maxlength: 5
      },
      name:{
        required: true,
        maxlength: 15,
        lettersonly: true,
        notNumber: true
      },
      academic_year:{
        required: true,
        maxlength: 9,
        nowhitespace: true
      }
    },
    messages:{
      email:{
        required: 'Please enter an email address.',
        email: 'Please enter a <em>valid</em> email address.'
      },
      reg_no:{
        required: 'Please enter registration number.'
      },
      academic_year:{
        required: 'Please enter academic year'
      },
      ep_no:{
        required: 'Please enter EP number.'
      },
      f_name:{
        required: 'Please enter first name.'
      },
      l_name:{
        required: 'Please enter last name.'
      },
      address:{
        required: 'Please enter address.'
      },
      nic_no:{
        required: 'Please enter NIC number.'
      },
      dob:{
        required: 'Please enter date of birth.'
      },
      mobile_no:{
        required: 'Please enter mobile number.'
      },
      home_tpno:{
        required: 'Please enter home telephone number.'
      },
      ol_results:{
        required: 'Please enter O/L results.'
      },
      al_results:{
        required: 'Please enter A/L results.'
      },
      f_occupation:{
        required: 'Please enter fathers occupation.'
      },
      m_occupation:{
        required: 'Please enter mothers occupation.'
      },
      siblings:{
        required: 'Please enter your sibiling details.'
      },
      dist_home:{
        required: 'Please enter distance from home.'
      },
      name:{
        required: 'Please enter name to search.'
      }
    }
  });

  $("#course").validate({
    rules:{
      course_id:{
        required: true,
        nowhitespace: true,
        maxlength: 7,
        courseCheck: true
      },
      course_name:{
        required: true,
        notNumber: true
      },
      credits:{
        required: true,
        number: true,
        maxlength: 1
      },
      c_name:{
        required: true,
        notNumber: true
      }
    },
    messages:{
      course_id:{
        required: 'Please enter course ID.'
      },
      course_name:{
        required: 'Please enter course name.'
      },
      credits:{
        required: 'Please enter number of credits.'
      },
      c_name:{
        required: 'Please enter course name.'
      }
    }
  });

  $("#academic").validate({
    rules:{
      course_id:{
        required: true,
        nowhitespace: true,
        maxlength: 7,
        courseCheck: true
      },
      ep_no:{
        required: true,
        nowhitespace: true,
        epCheck: true,
        maxlength: 6
      },
      results:{
        required: true,
        nowhitespace: true,
        maxlength: 2,
        notNumber: true
      }
    },
    messages:{
      course_id:{
        required: 'Please enter course ID.'
      },
      ep_no:{
        required: 'Please enter EP number.'
      },
      results:{
        required: 'Please enter results.'
      }
    }
  });

});
