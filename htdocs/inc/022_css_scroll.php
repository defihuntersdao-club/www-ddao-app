<style>
body
{
  --scrollbarBG: rgba(229, 231, 245, 0.3);
  --thumbBG: #4558BE;
}
body.dark-theme
{
  --scrollbarBG: #2C304F;
  --thumbBG: #4558BE;
}

body::-webkit-scrollbar {
  width: 11px;
}
body {
  scrollbar-width: thin;
  scrollbar-color: var(--thumbBG) var(--scrollbarBG);
}
body::-webkit-scrollbar-track {
  background: var(--scrollbarBG);
}
body::-webkit-scrollbar-thumb {
  background-color: var(--thumbBG) ;
  border-radius: 3px;
  border: 1px solid var(--scrollbarBG);
}
</style>