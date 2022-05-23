import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div>
      <head>
        <title>MEME GENERATOR</title>
      </head>
      <body>
      <div class="container">
      <h2>Meme Generator</h2>
      <from action="api\getMeme.php" method="GET">
          <input type="submit" value="MEMES"/>
      </from>
      </div>
      </body>
    </div>
  );
}

export default App;
