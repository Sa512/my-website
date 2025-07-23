function showForm(type) {
  document.getElementById('userForm').classList.add('hidden');
  document.getElementById('adminForm').classList.add('hidden');

  if (type === 'user') {
    document.getElementById('userForm').classList.remove('hidden');
  } else if (type === 'admin') {
    document.getElementById('adminForm').classList.remove('hidden');
  }
}
