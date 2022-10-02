import "./App.css";
import Header from "./components/header";
import Footer from "./components/footer";
import AddJob from "./components/job";

function App() {
  return (
    <div className="App">
      <Header></Header>
      <AddJob></AddJob>
      <Footer></Footer>
    </div>
  );
}

export default App;
