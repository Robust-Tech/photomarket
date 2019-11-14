//== Class definition

var DropzoneInput = function () {    
    //== Private functions
    var inpus = function () {

        // file type validation
        Dropzone.options.mDropzoneThree = {
            paramName: "stock_image", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 20, // MB
            acceptedFiles: "image/*",
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else { 
                    done(); 
                }
            }   
        };
    }

    return {
        // public functions
        init: function() {
            inpus(); 
        }
    };
}();

DropzoneInput.init();