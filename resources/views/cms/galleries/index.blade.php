@component('cms.components.content-listing') 

	@slot('pageUrl') 
		{{ $pageUrl }} 
	@endslot

	@slot('pageName') 
		{{ $pageName }} 
	@endslot

	@slot('pageItem') 
		{{ $pageItem }} 
	@endslot

	@slot('tHead')
		<th>Posisyon</th>
		<th>Adı</th>
		<th>Oluşturan</th>
		
		<th>Yayınla</th>
        <th>İşlem</th>
	@endslot

	@slot('tBody') 
		@foreach($records as $record)
            <tr>
                <td>{{ $record->position }}</td>
                <td>{{ $record->title_tr }}</td>
                <td>{{ $record->createdby->name .' @ '. $record->created_at->format('d/m/Y') }}</td>
				
                <td class="actionsColumn">{{ ($record->publish) ? 'Evet' : 'Hayır' }}</td>
                @include('cms.includes.content-table-actions', ['record' => $record, 'pageUrl' => $pageUrl])
            </tr>
        @endforeach
	@endslot

	@slot('contentScripts')
		<script>
            $(document).delegate('.togglePromotion', 'click' ,function(){
                var clickedItem = $(this);
                var recordId = clickedItem.data('record');
                $.ajax({
                    data: { record_id : recordId, _token: window.Laravel.csrfToken},
                    type: 'POST',
                    url: globalBaseUrl + "/{{ config('app.cms_path') }}/{{ $pageUrl }}/toggle-promotion",
                    success: function() {
                        clickedItem.toggleClass('btn-info').toggleClass('btn-danger');
                        clickedItem.find('i').toggleClass('fa-check').toggleClass('fa-times');
                        toastr.success('Değişiklik yapıldı');
                    }
                });
            });
		</script>
	@endslot
@endcomponent