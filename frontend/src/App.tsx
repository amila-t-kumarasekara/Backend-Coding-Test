import './App.css';
import Footer from './layouts/footer/footer';
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Dataupload from './pages/dataupload';
import Homepage from './pages/homepage';
import {Header} from './layouts/header/header';

function App() {
  return (
    <BrowserRouter>
        <Header />
        <Routes>
          <Route path="/" element={<Homepage />} />
          <Route path="/upload" element={<Dataupload />} />
        </Routes>
        <Footer />
      </BrowserRouter>
  );
}

export default App;
