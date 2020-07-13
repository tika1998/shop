$(document).ready(() => {
      $('#createForm').validate(({
        rules: {
            name: 'required',
            description: {
                required: true,
                minLength: 15
            },
            price: {
                required: true,
                digits: true
            },

            image: "jpg|jpeg|png|",
        },

        messages: {
            name: 'Enter your name',
            description: {
                required: 'description is required',
                minLength: 'min length 15',
            },
             price: {
                required: 'Price is required',
                digits: 'Enter number'
            },
            image: 'Enter JPG or JPEG or PNG'
        }

    }))

})

