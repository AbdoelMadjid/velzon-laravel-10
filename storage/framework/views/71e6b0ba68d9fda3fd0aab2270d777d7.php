<div class="date-display-container">
    <div class="date-display" id="date-display-<?php echo e($componentId); ?>">
        <?php echo e($formattedDate); ?> (<?php echo e($hijriDate); ?>)
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ensure unique ID is used
            var days = ["<font color='red'>Minggu</font>", "Senin", "Selasa", "Rabu", "Kamis",
                "<font color='#1f9d81'><b>Jum'at</b></font>", "Sabtu"
            ];
            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                "Oktober", "November", "Desember"
            ];

            function renderDate() {
                var mydate = new Date();
                var year = mydate.getFullYear();
                var day = mydate.getDay();
                var month = mydate.getMonth();
                var daym = mydate.getDate();

                if (daym < 10) daym = "0" + daym;
                document.getElementById("date-display-<?php echo e($componentId); ?>").innerHTML = days[day] + ", " + daym +
                    " " + months[month] + " " + year + " M (<?php echo e($hijriDate); ?>)";
            }

            renderDate();
        });
    </script>
</div>
<?php /**PATH D:\laragon\www3\velzon-default-10\resources\views/components/display-date.blade.php ENDPATH**/ ?>