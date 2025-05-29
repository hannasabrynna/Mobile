// src/ChatBox.jsx
function ChatBox({ messages }) {
  return (
    <div style={{ border: '1px solid #ccc', padding: 10, height: 300, overflowY: 'scroll' }}>
      {messages.map((msg, i) => (
        <div key={i}>
          <strong>{msg.user}:</strong> {msg.text}
        </div>
      ))}
    </div>
  );
}

export default ChatBox;
