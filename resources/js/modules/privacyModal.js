export function initPrivacyModal() {
    // Privacy Modal
    const cookiesAccepted = localStorage.getItem('cookiesAccepted');

    const modalPrivacy = document.getElementById('privacyModal');
    const modalPrivacyContent = document.getElementById('privacyModalContent');
    const privacyButton = document.getElementById('privacyButton');

    if (!modalPrivacy || !modalPrivacyContent || !privacyButton) return;

    if (cookiesAccepted !== 'true') {
        modalPrivacy.classList.remove('hidden');
        modalPrivacy.classList.add('flex');
    }

    function closePrivacyModal() {
        modalPrivacy.classList.add('hidden');
        modalPrivacy.classList.remove('flex');
    }

    privacyButton.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        closePrivacyModal();
    });

    // Close
    modalPrivacy.addEventListener('click', (e) => {
        if (!modalPrivacyContent.contains(e.target)) {
            closePrivacyModal();
        }
    });
}