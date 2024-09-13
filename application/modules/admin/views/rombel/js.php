 <!-- Include Sortable.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

  <script>

    function viewKelasAsal(){
           $.get("<?= base_url('akademik/Transaksi_kelas/getKelasAsal');?>", {}, function(data, status){           
              $('#view').html(data);
            });
        }
    function viewKelasTujuan(){
           $.get("<?= base_url('akademik/Transaksi_kelas/getKelasTujuan');?>", {}, function(data, status){           
              $('#view').html(data);
            });
        }

    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Sortable on both tables
      Sortable.create(document.getElementById('kelas_tujuan'), {
        group: 'shared',
        animation: 150,
        chosenClass: 'chosen',
        dragClass: 'dragging',
        multiDrag: false,        
        selectedClass: 'selected',

      });

      Sortable.create(document.getElementById('kelas_asal'), {
        group: 'shared',
        animation: 150,
        chosenClass: 'chosen',
        dragClass: 'dragging',
        multiDrag: true,
        selectedClass: 'selected',
         onEnd:function(evt){
           // movedItemsIds = [];
          // Update array with IDs of dragged items
          evt.items.forEach(item => {
            const draggedItemId = item.getAttribute('data-id');
            //movedItemsIds.push(draggedItemId);
            console.log(draggedItemId);
          });
          

        },
      });
    });
  </script>