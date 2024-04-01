@include('includes.Adminheader')
<style>
.opdracht{
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}

</style>
    <section>
        <div class="side_section">
            <p>Dit is voor de dagen</p>
<div class="opdracht">
  Categories:
  <form action="./RevFormC" method="POST">
    @csrf
    <label for="Name">Maak Categorie</label>
    <label for="Name">Naam van categorie</label>
    <input type="text" name="Name" id="Name">
    <input type="text" name="data" value="Categories" hidden>
    <input type="submit" value="Opsturen!">
  </form>
  @foreach ($category as $category)
  <h1>{{$category->Title}} : {{$category->id}}</h1>
  <form action="./RevFormD" method="POST">
    @csrf
    <label for="Name">Delete Post</label>
    <input type="text" name="Name" id="Name" value="{{$category->Title}}" hidden>
    <input type="text" name="Id" value="{{$category->id}}" hidden>
    <input type="text" name="data" value="Categories" hidden>
    <input type="submit" value="Verwijderen!">
  </form>
  <form action="./RevFormU" method="POST">
    @csrf
    <label for="Name">Update Post</label>
    <input type="text" name="Name" id="Name" value="{{$category->Title}}" >
    <input type="text" name="Id" value="{{$category->id}}" hidden>
    <input type="text" name="data" value="Categories" hidden>
    <input type="submit" value="Update!">
  </form>

  @endforeach
  Post:
  <form action="./RevFormC" method="POST">
    @csrf
    <label for="Name">Maak Post</label>
    <label for="Name">Naam van Post</label>
    <input type="text" name="Name" id="Name">
    <input type="text" name="data" value="post" hidden>
    <input type="submit" value="Opsturen!">
  </form>
  @foreach ($post as $post)
  <h1>{{$post->Title}} : {{$post->id}}</h1>
  <form action="./RevFormD" method="POST">
    @csrf
    <label for="Name">Delete Post</label>
    <input type="text" name="Name" id="Name" value="{{$post->Title}}" hidden>
    <input type="text" name="Id" value="{{$post->id}}" hidden>
    <input type="text" name="data" value="post" hidden>
    <input type="submit" value="Verwijderen!">
  </form>
  <form action="./RevFormU" method="POST">
    @csrf
    <label for="Name">Update Post</label>
    <input type="text" name="Name" id="Name" value="{{$post->Title}}" >
    <input type="text" name="Id" value="{{$post->id}}" hidden>
    <input type="text" name="data" value="post" hidden>
    <input type="submit" value="Update!">
  </form>

  @endforeach
  Combi:
  <form action="./RevFormCC" method="POST">
    @csrf
    <label for="id1">categorie kiezen (id)</label>
    <input type="text" name="id1" id="id1">
    <label for="Name2">Post kiezen (id)</label>
    <input type="text" name="id2" id="id2">
    <input type="submit" value="Opsturen!">
  </form>
  @foreach ($categorypost as $post)
  cat
  {{$post->category_id}}
  post
  {{$post->post_id}}
  <form action="./RevFormDC" method="POST">
    @csrf
    <label for="Name">Delete Post</label>
   
    <input type="text" name="id1" id="id1" value="{{$post->category_id}}" hidden>
    
    <input type="text" name="id2" id="id2" value="{{$post->post_id}}" hidden>
    <input type="submit" value="Verwijderen!">
  </form>
  <form action="./RevFormUC" method="POST">
    @csrf
    <label for="Name">Update Post</label>
    <label for="id1">categorie kiezen (id)</label>
    <input type="text" name="id1" id="id1" value="{{$post->category_id}}">
    <label for="Name2">Post kiezen (id)</label>
    <input type="text" name="id2" id="id2" value="{{$post->category_id}}">
    <input type="submit" value="Update!">
  </form>
  @endforeach
</div>


        </div>
        <div class="side_section">
            <p>Dit is voor het goedkeuren</p>
            <table>
                <tr>
                  <th>Naam</th>
                  <th>Tekst</th>
                  <th>Goedkeuring</th>
                  <th>Veranderen</th>
                </tr>
                @foreach ($revieuw as $rev)
                <tr>
                  <td>{{$rev->Naam}}</td>
                  <td>{{$rev->Text}}</td>
                  <td>{{$rev->Goedkeuring}}</td>
                  <td>
                    <form action="GoedKeuren" method="post">
                        @csrf
                        <input type="text" name="Id" value="{{$rev->id}}" hidden>
                        <input type="submit" name="Sub" value="Goed">
                        <input type="submit" name="Sub" value="Fout">
                    </form>
                  </td>
                </tr>
                @endforeach
              </table>
        </div>
    </section>
@include('includes.Adminfooter')

