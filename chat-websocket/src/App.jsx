// src/App.jsx
import { useEffect, useRef, useState } from 'react';
import ChatBox from './ChatBox';
import MessageInput from './MessageInput';

const WS_URL = 'ws://localhost:8080'; // WebSocket local

function App() {
  const [messages, setMessages] = useState([]);
  const [username, setUsername] = useState('');
  const socketRef = useRef(null);

  useEffect(() => {
    socketRef.current = new WebSocket(WS_URL);

    socketRef.current.onmessage = async (event) => {
  let data;

  if (event.data instanceof Blob) {
    const text = await event.data.text(); // converte Blob em string
    data = JSON.parse(text);
  } else {
    data = JSON.parse(event.data);
  }

  setMessages((prev) => [...prev, data]);
};


    return () => socketRef.current.close();
  }, []);

  const sendMessage = (text) => {
    if (!text.trim()) return;
    const msg = { user: username || 'Anônimo', text };
    socketRef.current.send(JSON.stringify(msg));
  };

  return (
    <div style={{ padding: 20 }}>
      {!username ? (
        <div>
          <h2>Digite seu nome:</h2>
          <input
            type="text"
            onChange={(e) => setUsername(e.target.value)}
            placeholder="Seu nome"
          />
        </div>
      ) : (
        <>
          <h1>Chat WebSocket</h1>
          <ChatBox messages={messages} />
          <MessageInput onSend={sendMessage} />
        </>
      )}
    </div>
  );
}

export default App;
