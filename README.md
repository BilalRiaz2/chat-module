# chat-module
after installing the package add chat relation in your User model.
public function chats(){
      return $this->belongsToMany(Chat::class);
}
