/* Author: Stephen Chapman

*/

/* Insert javascript related to Campaigner form embed*/
$(document).ready(function () {
            //
            $("#previewForm").validate({
                errorPlacement: function (error, element) {
                    if (element.next(".ui-datepicker-trigger").length > 0)
                        error.insertAfter(element.next(".ui-datepicker-trigger"));
                    else
                        error.insertAfter(element);
                },
                rules:
                {
                    confirmEmail: {
                        equalTo: "#1771899"
                    }
                },
                messages:
                {
                    confirmEmail: "Email addresses do not match."
                }
            })
            //
            $(".datepicker").datepicker({ showOn: 'button', buttonImage: 'http://secure.campaigner.com/csb/images/Toolbar/newAppointment.gif', buttonImageOnly: true, dateFormat: 'yy-mm-dd', constrainInput: true, changeMonth: true, changeYear: true, yearRange: "1900:+10", onSelect: function (dateText, inst) { inst.input.trigger("focus"); } });
            var dateFormat = "yyyy-mm-dd";
            $(".datepicker").attr("title", dateFormat).attr("format", dateFormat);

            // Force the calender to stay hidden till it's being invoked through the calendar icon
            $(".ui-helper-clearfix").css("display", "none");
        });


