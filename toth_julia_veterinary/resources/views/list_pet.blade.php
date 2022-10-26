<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Kor</th>
        <th>Fajta</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $pets as $pet )
         <tr>
           <td>{{ $pet->id }}</td>
           <td>{{ $pet->name }}</td>
           <td>{{ $pet->age }}</td>
           <td>{{ $pet
            
            
            
            
            ->type }}</td>
         </tr>
      @endforeach
    </tbody>
  </table>